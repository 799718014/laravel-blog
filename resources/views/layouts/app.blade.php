<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/common.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css')}}"/>
    <script type="text/javascript" src="{{ asset('admin/js/libs/modernizr.min.js')}}"></script>
    <script src="{{ asset('admin/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('build/layer.js')}}"></script>
</head>
<body>
<!--顶部start-->
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="javascript:void(0);">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('password.request') }}">修改密码</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">退出</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--顶部end-->

<div class="container clearfix">
    <!--lefr start-->
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="{{url('admin/category/create')}}"><i class="icon-font">&#xe008;</i>添加分类</a></li>
                        <li><a href="{{url('admin/category')}}"><i class="icon-font">&#xe005;</i>分类列表</a></li>
                        <li><a href="{{url('admin/article/create')}}"><i class="icon-font">&#xe008;</i>添加文章</a></li>
                        <li><a href="{{url('admin/article')}}"><i class="icon-font">&#xe005;</i>文章列表</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--lefr end-->
    <!--/sidebar-->

    @yield('content')

</div>
</body>
</html>