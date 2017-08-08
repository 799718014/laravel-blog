<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoryController extends CommonController
{
    //get admin/category   //显示分类列表信息
    public function index(){
        $data = Category::tree();
        //$data = $this->getTree($categorys,'cate_name','cate_id','cate_pid',0);

        return view('admin/category.index')->with('data',$data);
    }



    //POST      | admin/category/store   //添加分类
    public function store(Request $request){

     /*   if($request->isMethod('POST')){
            dd($request->all());
        }*/
        $input = Input::except('_token');

        $rules = [
            'cate_name'=>'required',
        ];
        $message =[
            'cate_name.required'=>'分类名称不能为空',
        ];
        $validator = \Validator::make($input,$rules,$message);
        if($validator->passes()){

            $re = Category::create($input);
            if($re){
                return redirect('admin/category');
            }else{
                return  back()->with('errors','数据填充失败，请稍后再试');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get admin/category/create   //添加分类
    public function create(){
        //获取父级分类

            $catepid = Category::where(array('cate_pid' => 0))->get();

            return view('admin/category/add')->with('catepid', $catepid);
    }

    //get admin/category/{category}    //显示单个分类信息
    public function show(){

    }

    //PUT|PATCH admin/category/{category}   //更新分类信息
    public function update($cate_id){
        $input = Input::except('_token','_method');

        //更新数据到指定id中
        $res = Category::where('cate_id',$cate_id)->update($input);

        if($res){
            return redirect('admin/category');
        }else{
            return  back()->with('errors','数据填充失败，请稍后再试');
        }
    }

    //GET|HEAD  | admin/category/{category}/edit  //编辑分类

    public function edit($cate_id){
        $field = Category::find($cate_id);
        $catepid = Category::where('cate_pid',0)->get();
     return view('admin/category.edit',compact('field','catepid'));
    }

    //DELETE    | admin/category/{category}   //删除单个分类
    public function destroy($cate_id){
        $res = Category::where('cate_id',$cate_id)->delete();
        //如果删除父类，子类pid变成0
        $upd = Category::where('cate_pid',$cate_id)->update(array('cate_pid'=>0));

        if($res){
            $data = [
                'status'=> 0,
                'msg'=>'分类删除成功'
            ];
        }else{
            $data = [
                'status'=> 1,
                'msg'=>'分类删除失败，请稍后重试！'
            ];
        }
        return $data;
    }

}
