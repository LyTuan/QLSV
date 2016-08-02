<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="QuocTuan.Info" />
    <link rel="stylesheet" href="{!!asset('/templates/css/style.css')!!}" />
    <title>Admin Area :: Đăng nhập</title>
</head>

<body>
<div id="layout">
    <div id="top">
        Admin Area :: Đăng nhập
    </div>
    <div id="menu">
        <table width="100%">
            <tr>
                <td>
                    <a href="{!!route('getInfo')!!}">Trang chính</a> | <a href="">Quản lý user</a> | <a href="">Quản lý danh mục</a> | <a href="">Quản lý tin</a>
                </td>
            </tr>
        </table>
    </div>
    @include('blocks.error')
    <div id="main">
          <form action="" method="POST" style="width: 650px; margin: 30px auto;">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
                <legend>Thông Tin Đăng Nhập</legend>                
                <table>
                    <tr>
                        <td class="login_img"></td>
                        <td>
                            <span class="form_label">Username:</span>
                            <span class="form_item">
                                <input type="text" name="txtUser" class="textbox" />
                            </span><br />
                            <span class="form_label">Password:</span>
                            <span class="form_item">
                                <input type="password" name="txtPass" class="textbox" />
                            </span><br />
                            <span class="form_label"></span>
                            <span class="form_item">
                                <input type="submit" name="btnLogin" value="Đăng nhập" class="button" />
                            </span>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
     <div id="bottom">
        Author: Lý Tuấn
    </div>   
</div>
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{!!asset('/templates/js/myscript.js')!!}"></script>
</body>
</html>
