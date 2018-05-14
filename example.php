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
    'user_id'=>1,
    'username'=>'mohyz',
];

$simpleInputVerify = new \Mohyz\SimpleInputValidator($input,[
    'user_id|用户ID'=>'require|length:3',
    'password|用户密码'=>'require'
]);

$simpleInputVerify->validate();