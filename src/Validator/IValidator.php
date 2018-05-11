<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/11
 * Time: 18:30
 * Purpose:
 */

namespace Mohyz\Validator;


interface IValidator
{
    public function verify(...$args);
}