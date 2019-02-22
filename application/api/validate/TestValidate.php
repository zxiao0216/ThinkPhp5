<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/20
 * Time: 17:10
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
//    验证器
    protected $rule = [
        'name' => 'require|max:10',//要求长度最大为10
        'email' => 'email'
    ];
}