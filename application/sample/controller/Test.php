<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/19
 * Time: 9:26
 */

namespace app\sample\controller;


//第一种是通过在route文件的路径后边直接加参数的形式
//class Test
//{
//    public function hello($id,$name,$age){
//        echo $id;
//        echo '|';
//        echo $name;
//        echo '|';
//        echo $age;
////        return 'hello,eexiaox';
//    }
//}

//第二种是使用Request的方式
use think\Request;
//class Test
//{
//    public function hello(){
////        param不区分请求类型
////        获取所有的请求变量的方法
//        $all = Request::instance() ->param();
//        var_dump($all);
//
////        单个变量获取的方法
////        $id = Request::instance() ->param('id');
////        $name = Request::instance() ->param('name');
////        $age = Request::instance() ->param('age');
////        echo $id;
////        echo '|';
////        echo $name;
////        echo '|';
////        echo $age;
////        return 'hello,eexiaox';
//
////        只获取?后边的参数,使用get方法
//        $all = Request::instance() ->get();
//        var_dump($all);
//
////        只获取路径后边的参数，使用route方法
//        $all = Request::instance() ->route();
//        var_dump($all);
//
////        获取由post body传递的参数，使用post方法
//        $all = Request::instance() ->post();
//        var_dump($all);
//    }
//}

//通过依赖注入的方式，定义一个Request实例的方式,无需关注是谁传入的，谁来实例化的。只需要在hello上声明后就可以使用。
class Test
{
    public function hello(Request $request){
        $all = $request ->param();
        var_dump($all);
    }
}

//第三种使用“助手函数”的方法
//class Test
//{
//    public function hello(){
////        同样的除了param 还有 post get方法
////        $all = input('param.');
//        //        获取单个就是
//        $all = input('param.name');
//
//        var_dump($all);
//    }
//}