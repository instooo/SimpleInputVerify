<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/14
 * Time: 17:28
 * Purpose:
 */

require_once 'vendor/autoload.php';


$input = [
    'user_id'=>123,
    'username'=>'mohyz',
    'password'=>'',
    'token'=>123
];

$simpleInputVerify = new \Mohyz\SimpleInputValidator($input,[
    'user_id|用户ID'=>'require|length:3',
    'password|用户密码'=>'require',
    'token|令牌'=>'notRequire|min:256'
]);

$simpleInputVerify->validate();