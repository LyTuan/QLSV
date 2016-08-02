<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SinhVien;
use App\Http\Requests\SinhVienRequest;
use App\Http\Requests;
use App\Http\Requests\SinhVienEditRequest;

class SinhVienController extends Controller
{
    public function getList(){
 		$data = SinhVien::select('id','masv','ten','lop')->orderBy('ten', 'asc')->paginate(5);
    	return view('sinhvien.danhsach')->with('sinhvien_data',$data);	
    }
    public function postSinhVien(SinhVienRequest $request){
    	$sinhvien = new SinhVien;
    	$sinhvien->masv = $request->txtmasv;
    	$sinhvien ->ten= $request->txtten;
		$sinhvien->lop = $request->txtlop;
		$sinhvien->save();
		return redirect('danhsach');
    }
    public function delSinhVien($id){
    		$sinhvien = sinhvien::find($id);
			$sinhvien->delete();
			return redirect('danhsach');
    }
    public function editSinhVien($id){
			$data = Sinhvien::where('id',$id)->get()->toArray();
			return view('sinhvien.edit',['edit_data'=>$data]);
	}
	public function postEditSinhVien(SinhVienEditRequest $request,$id){
			$sinhvien =  sinhvien::find($id);
			$sinhvien->masv = $request->txtmasv;
			$sinhvien ->ten= $request->txtten;
			$sinhvien->lop = $request->txtlop;
			$sinhvien->save();
			return redirect()->route('getList');
		}
}
