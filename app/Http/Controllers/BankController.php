<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\User;

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

    private function successLogin(){
        return view('home');
    }

    public function login(){

        return "login";
    }

    public function register(){
        return view('register');
    }

    public function home($id){
       // $user = User::findOrFail($id)->name;

      return view('home')->with('id', $id);
    }

    public function bills($id){
        return view('bills')->with('id', $id);
    }

    public function accounts($id){
        return view('accounts')->with('id', $id);
    }

    public function references($id){
        return view('references')->with('id', $id);
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
