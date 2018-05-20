<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/11
 * Time: 18:17
 * Purpose:
 */

namespace Mohyz;


use Mohyz\Validator\AbstractValidator;

class SimpleInputValidator
{

    private $input;
    private $rules;

    private $interrupt = true;

    private $validators = [];

    private $lang = [];
    private $validErrorRes = [];


    public function __construct(array $input, array $verifyRules, $interrupt = true, $lang = "zh_cn")
    {
        $this->lang = require_once __DIR__ . "\Lang\\{$lang}.php";
        $this->reset($input, $verifyRules, $interrupt);
    }

    public function reset(array $input, array $verifyRules, $interrupt = true)
    {
        $this->input = $input;
        $this->rules = $verifyRules;
        $this->interrupt = $interrupt;

        $this->validErrorRes = [];
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
            $rules = explode('|', $value);
            foreach ($rules as $rule) {

                if ($argsPos = strpos($rule, ':')) {
                    $ruleName = substr($rule, 0, $argsPos);
                    $argsStr = substr($rule, $argsPos + 1);
                    $args = explode(',', $argsStr);
                    $validatorName = ucfirst($ruleName);
                } else {
                    $ruleName = $rule;
                    $validatorName = ucfirst($rule);
                    $args = [];
                }

                /**
                 * @var $validator AbstractValidator
                 */

                if (isset($this->validators[$validatorName])) {
                    $validator = $this->validators[$validatorName];
                    $validator->reset(
                        $this->lang[$ruleName], $this->input, $fieldKey, $fieldLocalKey, $args
                    );
                } else {

                    $validator = $this->validators[$validatorName] = ValidatorFactory::getValidator(
                        $validatorName,
                        [$this->lang[$ruleName], $this->input, $fieldKey, $fieldLocalKey, $args]
                    );
                }

                $verifyRes = $validator->verify();

                if (!$verifyRes->getStatus()) {
                    if ($this->interrupt) {
                        throw new ValidatorException($verifyRes->getMsg(), $fieldKey, $fieldLocalKey);
                    } else {
                        $this->validErrorRes[$fieldKey] = $verifyRes;
                    }
                }

                if (!$verifyRes->getVerifyContinue()) {
                    break;
                }

            }
        }
        return true;

    }

    /**
     * @return array
     */
    public function getValidErrorRes()
    {
        return $this->validErrorRes;
    }


}