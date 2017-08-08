@extends('layouts.app')
<style>

    .list-page ul li{float: left;}
</style>

@section('content')
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="{{url('admin/home')}}">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">全部分类</span></div>
        </div>
       {{-- <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/ " method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>--}}
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="{{url('admin/category/create')}}"><i class="icon-font"></i>新增分类</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>分类名称</th>
                            <th>标题</th>
                            <th>关键字</th>
                            <th>描述</th>
                            <th>查看次数</th>
                            <th>父id</th>
                            <th>操作</th>
                        </tr>
                        @foreach($data as $k=>$v)
                        <tr>
                            <td class="tc"><input name="id[]" value="{{$v['cate_id']}}" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="{{$v['cate_id']}}" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="{{$v['cate_order']}}" type="text">
                            </td>
                            <td>{{$v['cate_id']}}</td>
                            <td title="{{$v['cate_name']}}"><a target="_blank" href="#" title="{{$v['cate_name']}}">{{$v['_cate_name']}}</a>
                            </td>
                            <td>{{$v['cate_title']}}</td>
                            <td>{{$v['cate_keywords']}}</td>
                            <td>{{$v['cate_description']}}</td>
                            <td>{{$v['cate_view']}}</td>
                            <td>{{$v['cate_pid']}}</td>
                            <td>
                                <a class="link-update" href="{{url('/admin/category/'.$v->cate_id.'/edit')}}">修改</a>
                                <a class="link-del" href="javascript:void(0);" onclick="delCate({{$v['cate_id']}})">删除</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="list-page">{{--{{$data->render()}}--}}</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->

    <script>
        //删除分类
        function delCate(cate_id) {

            layer.confirm('您确定要删除这个分类吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("{{url('/admin/category/')}}/"+cate_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
                    if(data.status == 0){
                        location.href = location.href;
                        layer.msg(data.msg, {icon: 6})
                    }else{
                        layer.msg(data.msg, {icon: 6})
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

