<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\SinhVien;

class SinhVienRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtmasv'=>'required|unique:lytuan_sinhvien,masv',
            'txtten'=>'required',
            'txtlop'=>'required'
        ];
    }
    public function messages(){
        return [
            'txtmasv.required'=>'Vui lòng nhập mã sinh viên',
            'txtten.required' =>'Vui lòng nhập tên',
            'txtlop.required'=>'Vui lòng nhập lớp',
            'txtmasv.uniquie'=>'Mã sinh viên đã tồn tại'
        ];
    }   
}
