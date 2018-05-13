<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/11
 * Time: 18:17
 * Purpose:
 */

namespace Mohyz;


class SimpleInputValidator
{

    private $input;
    private $rules;

    private $interrupt = true;

    private $validators = [];


    public function __construct(array $input, array $verifyRules, $interrupt = true)
    {
        $this->reset($input, $verifyRules, $interrupt);
    }

    public function reset(array $input, array $verifyRules, $interrupt = true)
    {
        $this->input = $input;
        $this->rules = $verifyRules;
        $this->interrupt = $interrupt;
    }

    public function validate()
    {

        foreach ($this->rules as $key => $value) {

            $fieldInfo = explode('|', $key);


            if (count($fieldInfo) == 2) {
                $fieldLocalKey = $fieldInfo[1];
            } else {
                $fieldLocalKey = null;
            }
            $fieldKey = $fieldInfo[0];



        }

    }


}