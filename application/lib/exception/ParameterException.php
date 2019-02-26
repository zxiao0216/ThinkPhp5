<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/26
 * Time: 10:23
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = 'Parameter error';
    public $errorCode = 10000;
}