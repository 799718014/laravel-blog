@extends('layouts.app')
@section('content')

    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="{{url('admin/home')}}">首页</a><span class="crumb-step">&gt;</span><span>新增分类</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="{{url('admin/article/'.$field->art_id)}}" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put">
                    {{ csrf_field() }}
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th width="120">分类：</th>
                            <td>
                                <select name="cate_id" id="catid" class="required">
                                    @foreach($data as $k=>$v)
                                        <option @if($field->cate_id == $v['cate_id']) selected @endif value="{{$v['cate_id']}}">{{$v['_cate_name']}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>文章标题：</th>
                            <td><input class="common-text" name="art_title" size="50" value="{{$field->art_title}}" type="text"></td>
                            @if ($errors->has('art_title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('art_title') }}</strong>
                                    </span>
                            @endif
                        </tr>
                        <tr>
                            <th>文章缩略图：</th>
                            <td>

                                <input class="art_thumb" name="art_thumb"  value="{{$field->art_thumb}}" type="text">

                                <input id="file_upload" name="file_upload" type="file" multiple="true">

                            </td>
                            <script src="{{asset('uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
                            <link rel="stylesheet" type="text/css" href="{{asset('uploadify/uploadify.css')}}">
                            <script type="text/javascript">
                                <?php $timestamp = time();?>
$(function() {
                                    $('#file_upload').uploadify({
                                        'buttonText' : '图片上传',
                                        'formData'     : {
                                            'timestamp' : '<?php echo $timestamp;?>',
                                            '_token'     : "{{csrf_token()}}"
                                        },
                                        'swf'      : "{{asset('uploadify/uploadify.swf')}}",
                                        'uploader' : "{{url('admin/upload')}}",
                                        'onUploadSuccess' : function(file, data, response) {
                                            //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
                                            $('input[name=art_thumb]').val(data);
                                            alert(data);
                                            $('#art_thumb_img').attr('src','/'+data);
                                        }
                                    });
                                });
                            </script>
                            <style type="text/css">
                                .uploadify{display: inline-block;}
                                .uploadify-button{border: none; border-radius: 5px;margin-top: 8px;}
                                table.add_tab tr td span.uploadify-button-text{color: #fff;margin: 0;}
                            </style>
                        </tr>
                        <tr>
                            <th></th>
                            <td><img src="/{{$field->art_thumb}}" alt="" id="art_thumb_img" style="max-width: 350px;max-height: 100px;"></td>
                        </tr>
                        <tr>
                            <th>作者：</th>
                            <td><input class="common-text" name="art_edtor"  value="{{$field->art_edtor}}" type="text"></td>
                        </tr>
                        <tr>
                            <th>分类关键词：</th>
                            <td><input class="art_tag" name="art_tag"  value="{{$field->art_tag}}" type="text"></></td>
                        </tr>
                        <tr>
                            <th>分类描述：</th>
                            <td><textarea name="art_description" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="5">{{$field->art_description}}</textarea></td>
                        </tr>
                        <tr>
                            <th>文章内容：</th>
                            <td>
                                <script type="text/javascript" charset="utf-8" src="{{asset('utf8-php/ueditor.config.js')}}"></script>
                                <script type="text/javascript" charset="utf-8" src="{{asset('utf8-php/ueditor.all.js')}}"> </script>
                                <script type="text/javascript" charset="utf-8" src="{{asset('utf8-php/lang/zh-cn/zh-cn.js')}}"></script>

                                <script id="editor" type="text/plain" name="art_content" style="width:960px;height:500px;">{!!$field->art_content!!}</script>

                                <script type="text/javascript">

                                //实例化编辑器
                                //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                                var ue = UE.getEditor('editor');
                                </script>
                                <style>
                                    .edui-default{line-height: 28px;}
                                    div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body{overflow: hidden;height: 20px;}
                                    div.edui-box{overflow: hidden;height: 22px;}

                                </style>
                            </td>
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
