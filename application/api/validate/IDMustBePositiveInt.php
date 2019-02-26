<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/21
 * Time: 11:29
 */

namespace app\api\validate;


use think\Validate;


//class IDMustBePositiveInt extends Validate
//{
//    protected $rule = [
//        'id' => 'require|isPositiveInteger',
//    ];
//
//    protected function isPositiveInteger($value,$rule='',$data='',$field='')
//    {
//        if(is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
//            return true;
//        }
//        else{
//            return $field.'必须是正整数';
//        }
//    }
//}
class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
        'num' => 'in:1,2,3',
    ];

    protected function isPositiveInteger($value,$rule='',$data='',$field='')
    {
        if(is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
            return true;
        }
        else{
            return $field.'必须是正整数';
        }
    }
}