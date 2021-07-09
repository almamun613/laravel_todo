<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ControllerUser extends Controller
{
    public function showRegister(){
        return view('register');
    }
    public function register(){
        try {
            $this->validate(request(), [
                'username' => 'required|min:4|alpha_dash|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:4',

            ]);
        } catch (ValidationException $e) {
        }
        User::create([
          'username'  => request('username'),
           'email' => request('email'),
            'password'=> bcrypt(request('password'))
            ]);
        return redirect('/login');
    }
    public function login(){
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt([
            'username'  => \request('username'),
            'password' => \request('password'),
        ])){
            return redirect()->route('todoList');
        }else{
            return redirect()->back()->with('loginError','Credential Does nOt match ');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }



}
