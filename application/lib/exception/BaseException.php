<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/25
 * Time: 16:45
 */

namespace app\lib\exception;


use think\Exception;
use Throwable;

class BaseException extends Exception
{
//    http 状态码 如：404,200
    public $code = 400;

//    错误具体信息
    public $msg = 'Parameter error';

//    自定义的错误码
    public $errorCode = 10000;

    public function __construct($params=[])
    {
        if(!is_array($params)){
            return ;
//            throw new Exception('The parameters must be arrays');
        }
        if(array_key_exists('code',$params)){
            $this->code = $params['code'];
        }
        if(array_key_exists('msg',$params)){
            $this->msg = $params['msg'];
        }
        if(array_key_exists('errorCode',$params)){
            $this->errorCode = $params['errorCode'];
        }


    }
}