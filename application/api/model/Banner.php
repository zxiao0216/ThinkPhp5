<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/22
 * Time: 16:54
 */

namespace app\api\model;


use think\Db;
use think\Exception;

class Banner
{
    public static function getBannerByID($id)
    {
//        原生sql的方式
//        $result = Db::query(
//            'select * from banner_item where banner_id=?',[$id]);
//        return $result;

//        查询构建器的方式 find只能返回一条数据；select返回所有满足条件的数据。还有update delete insert三个。一共五个执行方法。
//        这五个方法之前的方法叫做 链式方法（辅助方法），顺序没有关系
//        $result = Db::table('banner_item')->where('banner_id','=',$id)//只有调用了后边的find和select方法才相当于调用了sql语句
//            ->select();
////        where('字段名','表达式','查询条件');
//        return $result;

//        闭包
        $result = Db::table('banner_item')
//            ->fetchSql()   如果辅助方法写上这个，即使后边写了执行方法，也是不执行sql的
            ->where(function ($query) use ($id){
                $query->where('banner_id','=',$id);
            })
            ->select();
        return $result;

    }
}