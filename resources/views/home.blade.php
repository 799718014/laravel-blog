@extends('layouts.app')

@section('content')
{{--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>--}}
<div class="main-wrap">
    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎使用『有主机上线』后台，建站的首选工具。</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-title">
            <h1>快捷操作</h1>
        </div>
        <div class="result-content">
            <div class="short-wrap">
                <a href="#"><i class="icon-font">&#xe001;</i>新增作品</a>
                <a href="{{url('admin/article')}}"><i class="icon-font">&#xe005;</i>新增文章</a>
                <a href="{{url('admin/category')}}"><i class="icon-font">&#xe048;</i>添加分类</a>
                <a href="#"><i class="icon-font">&#xe041;</i>新增博客分类</a>
                <a href="#"><i class="icon-font">&#xe01e;</i>作品评论</a>
            </div>
        </div>
    </div>
    <div class="result-wrap">
        <div class="result-title">
            <h1>系统基本信息</h1>
        </div>
        <div class="result-content">
            <ul class="sys-info-list">
                <li>
                    <label class="res-lab">操作系统</label><span class="res-info"> <?PHP echo PHP_OS; ?> </span>
                </li>
                <li>
                    <label class="res-lab">运行环境</label><span class="res-info">{{$_SERVER['SERVER_SOFTWARE']}}</span>
                </li>
                <li>
                    <label class="res-lab">PHP运行方式</label><span class="res-info">apache2handler</span>
                </li>
                <li>
                    <label class="res-lab">静静设计-版本</label><span class="res-info">v-0.1</span>
                </li>
                <li>
                    <label class="res-lab">上传附件限制</label><span class="res-info"> <?PHP echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件"; ?></span>
                </li>
                <li>
                    <label class="res-lab">北京时间</label><span class="res-info">{{date('Y-m-d h:i:s',time())}}</span>
                </li>
                <li>
                    <label class="res-lab">服务器域名/IP</label><span class="res-info">{{ $_SERVER['REMOTE_ADDR']}}</span>
                </li>
                <li>
                    <label class="res-lab">Host</label><span class="res-info">{{ $_SERVER['HTTP_HOST']}}</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="result-wrap">
        <div class="result-title">
            <h1>使用帮助</h1>
        </div>
        <div class="result-content">
            <ul class="sys-info-list">
                <li>
                    <label class="res-lab">官方交流网站：</label><span class="res-info"><a href="http://user.qzone.qq.com/913737303/infocenter?ptsig=fwuIGucgSq7VB3N8vMjtbG8F-lEbvyN44NaOi-8MrHw_" title="有主机上线设计" target="_blank">jscss.me</a></span>
                </li>
                <li>
                    <label class="res-lab">官方交流QQ群：</label><span class="res-info"><a class="qq-link" target="_blank" href="http://user.qzone.qq.com/913737303/infocenter?ptsig=fwuIGucgSq7VB3N8vMjtbG8F-lEbvyN44NaOi-8MrHw_"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="JS-前端开发" title="JS-前端开发"></a> </span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/main-->
@endsection
