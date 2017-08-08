@extends('layouts.app')
<style>

    .list-page ul li{float: left;}
</style>

@section('content')
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="{{url('admin/home')}}">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">全部分类</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="{{url('admin/article/create')}}"><i class="icon-font"></i>添加文章</a>
                        <a id="updateOrd" href="{{url('admin/article')}}"><i class="icon-font"></i>全部文章</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th width="5%">ID</th>
                            <th width="5%">分类名称</th>
                            <th width="20%">标题</th>
                            <th width="30%">描述</th>
                            <th width="5%">点击数</th>
                            <th width="5%">编辑</th>
                            <th width="10%">时间</th>
                            <th width="10%">操作</th>
                        </tr>
                        @foreach($data as $k=>$v)
                        <tr>
                            <td class="tc"><input name="id[]" value="{{$v['art_id']}}" type="checkbox"></td>
                            <td>{{$v['art_id']}}</td>
                            <td >{{$v['cate_id']}}</td>
                            <td><a target="_blank" href="#" title="{{$v['art_title']}}">{{mb_substr($v['art_title'],0,16,'utf-8')}}</a></td>
                            <td>{{mb_substr($v['art_description'],0,48,'utf-8')}}</td>
                            <td>{{$v['art_view']}}</td>
                            <td>{{$v['art_edtor']}}</td>
                            <td>{{date('Y-m-d',$v['art_time'])}}</td>
                            <td>
                                <a class="link-update" href="{{url('/admin/article/'.$v->art_id.'/edit')}}">修改</a>
                                <a class="link-del" href="javascript:void(0);" onclick="delArt({{$v['art_id']}})">删除</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="list-page">{{$data->render()}}</div>
                </div>
            </form>
        </div>
    </div>
    <style>
        .list-page li.disabled{
            margin: 0 5px;
            padding: 2px 7px;
            border: 1px solid #ccc;
            background: #f3f3f3;

        }
        .list-page li.active{
            margin: 0 5px;
            padding: 2px 7px;
            border: 1px solid #ccc;
            background: #f3f3f3;
        }
    </style>
    <!--/main-->

    <script>
        //删除分类
        function delArt(art_id) {

            layer.confirm('您确定要删除这个分类吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("{{url('/admin/article/')}}/"+art_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
                    if(data.status == 0){
                        location.href = location.href;
                        layer.msg(data.msg, {icon: 6})
                    }else{
                        layer.msg(data.msg, {icon: 5})
                    }
                })
                /*layer.msg('的确很重要', {icon: 1});*/
            }, function(){
                /*layer.msg('也可以这样', {
                    time: 20000, //20s后自动关闭
                    btn: ['明白了', '知道了']
                });*/
            });
        }
    </script>

@endsection

