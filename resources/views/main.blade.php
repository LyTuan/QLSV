@extends('master')
@section('content')
	    <table class="table1" border="1px" margin-left="100px">
	    	<td align="right">
					Xin chào {!!Auth::user()->username!!} | <a href="{!!url('logout')!!}">Logout</a>
			</td>
			<caption text-align="center">Danh sách sinh viên</caption>
			<thead>
				<tr>
					<th>id</th>
					<th>Mã SV</th>
					<th>Tên</th>
					<th>Lớp</th>
				</tr>
			</thead>
			
			<tbody>
			@foreach($sinhvien_data as $data)
				<tr>
					<td>{!! $data['id'] !!}</td>
					<td>{!! $data['masv']!!}</td>
					<td>{!! $data['ten']!!}</td>
					<td>{!! $data['lop']!!}</td>
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
@endsection	