@extends('master')
@section('content')
@foreach($edit_data as $data)
<table border="1px" margin-left="100px">
	
		<form action="" method="POST" style="width:650px;">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<input type="text" name="txtmasv" value="{!!$data["masv"]!!}">
			<input type="text" name='txtten' value="{!!$data['ten']!!}">
			<input type="text" name='txtlop' value="{!!$data['lop']!!}">
			
			<input type="submit" value='Chỉnh sửa xong'>
		</form>
	
</table>
@endforeach
@endsection