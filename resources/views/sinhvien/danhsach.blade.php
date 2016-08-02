@extends('master')
@section('menu')
<div id="menu">
        <table width="100%">
            <tr>
                <td>
                    <a href="">Trang chính</a> 
                </td>
                <td align="right">
                    Xin chào {!!Auth::user()->username!!} | <a href="{!!url('logout')!!}">Logout</a>
                    {{-- Xin chào  | <a href="{!!url('logout')!!}">Logout</a> --}}
                </td>
            </tr>
        </table>
    </div>
@endsection
@section('content')

	    <table class="table" border="1px" margin-left="150px">
			<caption text-align="center">Danh sách sinh viên</caption>
			<thead>
				<tr>
					<th>id</th>
					<th>Mã SV</th>
					<th>Tên</th>
					<th>Lớp</th>
					<th>Sửa</th>
					<th>Xóa</th>
				</tr>
			</thead>
			<tbody>
			@foreach($sinhvien_data as $data)
				<tr>
					<td>{!! $data['id'] !!}</td>
					<td>{!! $data['masv']!!}</td>
					<td>{!! $data['ten']!!}</td>
					<td>{!! $data['lop']!!}</td>
					<td><a href="edit/{!!$data['id']!!}" ><img src="{!!asset('/templates/images/edit.png')!!}" alt="delete icon"></a></td>
					<td><a href="delete/{!!$data['id']!!}"  onclick="return xacNhanXoa('Bạn có chắc chắn muốn xóa')"><img src="{!!asset('/templates/images/delete.png')!!}" alt="delete icon"></a></td>
				</tr>
			@endforeach
			@include('blocks.error')
			<form action="" method="post" style="width:650px;">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="text" name="txtmasv" placeholder="Mã Sinh viên">
				<input type="text" name='txtten' placeholder="Tên">
				<input type="text" name='txtlop' placeholder="Lớp">
				<input type="submit" value='Thêm vào danh sách'>
			</form>
			</tbody>
	</table>
	<div>


		{!! $sinhvien_data->render() !!}	


	
@endsection	
