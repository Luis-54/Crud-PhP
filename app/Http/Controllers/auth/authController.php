<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function register(){

        return view('auth.register');
    }

    public function registerVerify(RegisterRequest $request){

        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Usuario Registrado Correctamente');
    }

    public function login(){
        return view('auth.login');
        }

        public function LoginVerify(LoginRequest $request){


            if(Auth::attempt( [ 'email'=>$request->email, 'password'=>$request->password ])){
                return redirect()->route('dashboard');
            }

            return back()->withErrors(['invalid_credentials' => 'Usuario o contraseña no Validos'])->withInput();

        }


       public function signOut(){
        Auth::logout();
        return  redirect()->route('welcome')->without('sucess', 'sesion cerrada correctamente');


       }
}
