<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\User;
class LoginController extends Controller
{
    public function getLogin(){
    	if(!Auth::check()){//Kiểm tra login chưa nếu chưa login đưa tới trang login
    		return view('login.login');
    	}else{//Nếu không đưa tới trang chính
    		return redirect('danhsach');
    	}
    }
  
    public function postLogin(LoginRequest $request){
    	$login =['username'=>$request->txtUser,'password'=>$request->txtPass];
    	if(Auth::attempt($login)){
    		return redirect('danhsach');
    	}else{
    		return redirect()->back();
    	}
    }
}
