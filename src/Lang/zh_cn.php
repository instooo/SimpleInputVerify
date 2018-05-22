<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/13
 * Time: 16:24
 */

return [

    'max' => [
        '{field} 值 {value} 大于 {max}'
    ],
    'min' => [
        '{field} 值 {value} 小于 {min}'
    ],

    'ip' => [
        '{field} 值 {value} 不是一个有效IP地址'
    ],

    'email' => [
        '{field} 值 {value} 不是一个电子邮箱地址'
    ],

    'url' => [
        '{field} 值 {value} 不是一个URL'
    ],

    'numeric' => [
        '{field} 值 {value} 不是一个数字'
    ],

    'string' => [
        '{field} 值 {value} 不是一个字符串'
    ],

    'require' => [
        '{field} 不存在'
    ],
    'notRequire' => [
        ''
    ],

    'length' => [
        '{field} 长度不等于 {args}',
        '{field} 长度大于 {args}',
        '{field} 长度小于 {args}'
    ],

    'in' => [
        '{field} 值 {value} 不在 {args} 内'
    ],

    'notIn' => [
        '{field} 值 {value} 在 {args} 内'
    ],

    'regex' => [
        '{field} 值 {value} 与表达式 {regex} 不匹配'
    ],

    'notEmpty' => [
        '{field} 值为空'
    ]

];