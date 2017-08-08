<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『豪情』后台管理</title>
    <link href="{{ asset('admin/css/admin_login.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .help-block{color: red;}
    </style>
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" method="post">
                {{ csrf_field() }}
                <ul class="admin_items">
                    <li>
                        <label for="name">用户名：</label>
                        <input type="text" name="name" value="lzx" id="name" size="40" class="admin_input_style" />
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </li>
                    <li>
                        <label for="password">密码：</label>
                        <input type="password" name="password" value="123456" id="password" size="40" class="admin_input_style" />
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <p class="admin_copyright"><a tabindex="5" href="#">返回首页</a> &copy; 2017 Powered by <a href="" target="_blank">猜中有奖</a></p>
</div>
</body>
</html>