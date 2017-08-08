<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected  $table = 'category';
    protected  $primaryKey = 'cate_id';
    public  $timestamps = false;

    protected $guarded = [];


    public static function tree(){
        $categorys = Category::all();
        return (new Category())->getTree($categorys,'cate_name','cate_id','cate_pid');

    }

    /*
     * 排序
     * @param arr $categorys  数据
     * @param str $file_name  排序字段名
     * @param str $file_id    排序id
     * @param str $file_pid   排序pid
     * @param int $pid        pid默认值
     */
    public function getTree($categorys,$file_name,$file_id='id',$file_pid='pid',$pid=0){
        $data =array();
        foreach ($categorys as $k=>$v){
            if($v->$file_pid == $pid){
                $categorys[$k]["_$file_name"] = $categorys[$k][$file_name];
                $data[] = $v;
                foreach ($categorys as $k1=>$v1){
                    if($v->$file_id == $v1->$file_pid){
                        $categorys[$k1]["_$file_name"] = '→'.$categorys[$k1][$file_name];
                        $data[] = $v1;
                    }
                }
            }
        }
        return $data;
    }
}
