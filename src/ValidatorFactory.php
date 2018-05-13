<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/11
 * Time: 18:26
 * Purpose:
 */

namespace Mohyz;


use Mohyz\Validator\AbstractValidator;

class ValidatorFactory
{


    /**
     * @param $name
     * @param array $args
     * @return AbstractValidator
     * @throws ValidatorException
     */
    public static function getValidator($name, array $args)
    {
        $className = __NAMESPACE__ . "\\Validator\\{$name}Validator";
        if (!class_exists($className)) {
            throw new ValidatorException("can't no found $name validator");
        } else {
            $classRef = new \ReflectionClass($className);
            return $classRef->newInstanceArgs($args);
        }
    }

}