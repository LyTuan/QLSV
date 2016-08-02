<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     
    <link rel="stylesheet" href="{!!asset('/templates/css/style.css')!!}" />

	<title>Danh sách sinh viên</title>
</head>
<body >
<div id="layout" >
	 <div id="top">
        Quản lý danh sách sinh viên
    </div>
    @yield('menu')
    <div id="main">
     	@yield('content')
     </div>
	
</div>
 <div id="bottom">
        Author:Lý Tuấn
    </div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="{!!asset('/templates/js/myscript.js')!!}"></script>

</body>
