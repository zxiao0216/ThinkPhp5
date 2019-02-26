<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/25
 * Time: 16:45
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
//    http 状态码 如：404,200
    public $code = 400;

//    错误具体信息
    public $msg = 'Parameter error';

//    自定义的错误码
    public $errorCode = 10000;
}