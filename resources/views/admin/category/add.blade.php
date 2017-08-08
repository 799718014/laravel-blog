@extends('layouts.app')
@section('content')
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="{{url('admin/home')}}">首页</a><span class="crumb-step">&gt;</span><span>新增分类</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="{{url('admin/category')}}" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>父级分类：</th>
                            <td>
                                <select name="cate_pid" id="catid" class="required">
                                    <option value="0">顶级分类</option>
                                    @foreach($catepid as $k=>$v)
                                    <option value="{{$v['cate_id']}}">{{$v['cate_name']}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>栏目名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="cate_name" size="50" value="" type="text">

                                @if ($errors->has('cate_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cate_name') }}</strong>
                                    </span>
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <th>分类标题：</th>
                                <td><input class="common-text" name="cate_title" size="50" value="" type="text"></td>
                            </tr>
                            <tr>
                                <th>分类关键词：</th>
                                <td><textarea name="cate_keywords" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <th>分类描述：</th>
                                <td><textarea name="cate_description" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <th>排序：</th>
                                <td><input class="common-text" name="cate_order" size="10" value="" type="text"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
@endsection
