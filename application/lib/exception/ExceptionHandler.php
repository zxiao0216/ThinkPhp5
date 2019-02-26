<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/25
 * Time: 16:15
 */

namespace app\lib\exception;


use Exception;
use think\exception\Handle;
use think\Request;

class ExceptionHandler extends Handle
{

    private $code;
    private $msg;
    private $errorCode;
//    需要返回客户端当前请求的url路径
    public function render(Exception $e)
    {
        if($e instanceof BaseException){
//            如果是自定义的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }else{
            $this->code = 500;
            $this->msg = 'Server internal error';
            $this->errorCode = 999;
        }
        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'errorCode' => $this->errorCode,
            'request_url' => $request->url(),
        ];
        return json($result,$this->code);
    }
}