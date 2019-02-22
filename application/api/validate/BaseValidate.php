<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/22
 * Time: 9:22
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
//        获取http出入的参数
//        对这些参数做校验
        $request = Request::instance();
        $params = $request->param();

        $result = $this->check($params);
        if(!$result){
            $error = $this->error;
            throw new Exception($error);
        }
        else{
            return true;
        }
    }
}