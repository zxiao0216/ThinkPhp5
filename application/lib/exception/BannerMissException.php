<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/25
 * Time: 16:51
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = 'The requested Banner does not exist';
    public $errorCode = 40000;
}