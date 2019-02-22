<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/20
 * Time: 14:31
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\validate\TestValidate;
use think\Validate;
class Banner
{
    /**
     * 获取制定id的Banner信息
     * @url /banner/:id
     * @http GET
     * @id 指的是Banner的id号
    */
    public function getBanner($id){
        (new IDMustBePositiveInt())->goCheck();
        $c = 1;

////        自定义验证规则，验证id,此段伪代码在验证一个id的时候可以，但是多的情况下，就不建议使用。使用新建IDMustBePositiveInt类的方式
//        $data =[
//            'id' => $id,
//        ];
//
////        $validate = new Validate([
////            'id' => '',
////        ]);
//
//        $validate = new IDMustBePositiveInt();
//        $result = $validate->batch()
//            ->check($data);
//
//        if($result){
//
//        }
//        else{
//
//        }


//        独立验证
//        $data =[
//            'name' => 'vender11111',
//            'email' => 'venderqq.com'
//        ];
//
////        $validate = new Validate([
//////            类似于这样的require max:10 email是在tp5中内置的验证规则
////            'name' => 'require|max:10',//要求长度最大为10
////            'email' => 'email'
////        ]);
//
////        验证器的方式 定义validate
//            $validate =  new TestValidate();
//
////        $result = $validate->check($data);  //只有check方法时，只检测第一个是否符合。输出使用echo
////        echo $validate->getError();
//
//        $result = $validate->batch()->check($data);  //        batch是批量检测,输出为一个数组，使用
//        var_dump($validate->getError()) ;


//        验证器 此方法在validate文件夹下
    }
}