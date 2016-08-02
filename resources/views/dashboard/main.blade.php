@extends('master')
@section('menu')
    <div id="menu">
        <table width="100%">
            <tr>
                <td>
                    <a href="">Trang chính</a> 
                </td>
                <td align="right">
                    {{-- Xin chào {!!Auth::user()->username!!} | <a href="{!!url('logout')!!}">Logout</a> --}}
                    Xin chào  | <a href="{!!url('lytuan_login')!!}">Login</a>
                </td>
            </tr>
        </table>
    </div>

@endsection
@section('content')
	
	    <table class="table" border="1px" margin-left="100px">
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
			</tbody>

	</table>
	{!! $sinhvien_data->render() !!}

	
@endsection	
