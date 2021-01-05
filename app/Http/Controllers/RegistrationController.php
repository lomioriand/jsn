<?php

namespace App\Http\Controllers;

use App\Account;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(Request $request){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:3',
            'address' => 'required',
            'phone' => 'required|size:10',
            'card_number' => 'required|size:12',
            'cvc' => 'required|size:3',
            'valid' => 'required',
            'amount' => 'required'
        ]);

        
       $new_user = User::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'password' => Hash::make($request['password']),
           'address' => $request['address'],
           'phone' => $request['phone'],
           'remember_token' => Str::random(10)
       ]);
       

       $account = Account::create([
        'user_id' => $new_user->id,
        'card_number' => $request['card_number'],
        'cvc' => $request['cvc'],
        'valid' => $request['valid'],
        'amount' => $request['amount']
       ]);


        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            $userID = Auth::user()->id;
            
            return redirect('home/'.$userID);
        } else{
            return redirect('/');
        }
    }
}
