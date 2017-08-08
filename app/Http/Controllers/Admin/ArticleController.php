<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticleController extends CommonController
{
    //
    public function index(){
        $data = Article::orderBy('art_id','desc')->paginate(2);
        return view('admin/article/index')->with('data',$data);
    }

    //get admin/article/create   //添加文章
    public function create(){
        //获取父级分类
        $data = (new Category())->tree();
        return view('admin/article/add',compact('data'));
    }

    //POST      | admin/article/store   //添加文章
    public function store(Request $request){
        $input = Input::except('_token');
        $input['art_time'] = time();

        $rules = [
            'art_title'=>'required',
            'art_content'=>'required',
        ];
        $message =[
            'art_title.required'=>'文章标题不能为空',
            'art_content.required'=>'文章内容不能为空',
        ];
        $validator = \Validator::make($input,$rules,$message);
        if($validator->passes()){

            $re = Article::create($input);
            if($re){
                return redirect('admin/article');
            }else{
                return  back()->with('errors','数据填充失败，请稍后再试');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //GET|HEAD  | admin/category/{category}/edit  //编辑文章

    public function edit($art_id){
        $field = Article::find($art_id);
        //获取父级分类
        $data = (new Category())->tree();
        return view('admin/article/edit',compact('field','data'));
    }

    //PUT|PATCH admin/category/{category}   //更新文章
    public function update($art_id){
        $input = Input::except('_token','_method');


        //更新数据到指定id中
        $res = Article::where('art_id',$art_id)->update($input);

        if($res){
            return redirect('admin/article');
        }else{
            return  back()->with('errors','数据填充失败，请稍后再试');
        }
    }

    //DELETE    | admin/category/{category}   //删除文章
    public function destroy($art_id){

        $res = Article::where('art_id',$art_id)->delete();

        if($res){
            $data = [
                'status'=> 0,
                'msg'=>'文章删除成功'
            ];
        }else{
            $data = [
                'status'=> 1,
                'msg'=>'文章删除失败，请稍后重试！'
            ];
        }
        return $data;
    }



}
