<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

use App\SinhVien;

class LogoutController extends Controller
{

   
      public function getLogout(){
       
      	Auth::logout();
    	$data = SinhVien::select('id','masv','ten','lop')->orderBy('ten', 'asc')->paginate(5);
    	return view('dashboard.main')->with('sinhvien_data',$data);

    }
}
