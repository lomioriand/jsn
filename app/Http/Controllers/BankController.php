<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Account;
use App\Bill;
use App\Dlog;
use Carbon\Carbon;
use App\Tlog;

class BankController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function checkLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            $userID = Auth::user()->id;
            
            return redirect('home/'.$userID);
        } else{
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function home($id){
      return view('home')->with('id', $id);
    }

    public function bills($id){
        $bills = Bill::where('user_id', $id)->get();
        //                                  ->get('amount')[1]->amount;
        return view('bills')->with('bills', $bills)->with('id', $id);
    }

    public function bills_pay($bill_id){

        $amount = Bill::where('id', $bill_id)->get('amount')[0]->amount;

        $id = Bill::where('id', $bill_id)->get('user_id')[0]->user_id;

        if(Account::where('id',$id)->get('amount')[0]->amount - $amount < 0){
            return back()->with('error', 'Not Enough Money In Account');
        }

        Account::where('id', $id)->decrement('amount', $amount);

        Bill::where('id', $bill_id)->update(array('status' => 'Paid'));

        $bills = Bill::where('user_id', $id)->get();

        Tlog::create([
            'uid' => $id,
            'type' => 'OUT',
            'amount' => $amount,
            'date' => Carbon::now(),
            'bene' => Bill::where('id', $bill_id)->get('name')[0]->name
        ]);

        return view('bills')->with('bills', $bills)->with('id', $id);
    }


    public function bill_add($user_id, Request $request){
        
            Bill::create([
                'user_id' => $user_id,
                'name' => $request['billName'],
                'type' => $request['billType'],
                'status' => 'Awaits Payment',
                'amount' => $request['billAmount']
               ]);
               $bills = Bill::where('user_id', $user_id)->get();
               return view('bills')->with('bills', $bills)->with('id', $user_id);

    }

    
    public function accounts($id){
        return view('accounts')->with('id', $id);
    }

    public function deposit($id, Request $request){
        Account::where('id', $id)->increment('amount', $request['amount']);

        Dlog::create([
            'uid' => $id,
            'currency' => 'BGN',
            'amount' => $request['amount'],
            'date' => Carbon::now()
        ]);

        return view('accounts')->with('id', $id);
    }


    public function references($id){

        $deposits = Dlog::where('uid', $id)->get();
        $transactions = Tlog::where('uid', $id)->get();

        return view('references')->with('id', $id)->with('deposits', $deposits)->with('transactions', $transactions);
    }

    public function contacts($id){
        return view('contacts')->with('id', $id);
    }

    public function profile($id){
        return view('profile')->with('id', $id);
    }

    public function promotions($id){
        return view('promotions')->with('id', $id);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
