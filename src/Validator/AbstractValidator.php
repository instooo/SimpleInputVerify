<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/13
 * Time: 16:28
 */

namespace Mohyz\Validator;


abstract class AbstractValidator
{
    protected $errorMsg;
    protected $input;
    protected $fieldKey;
    protected $args;
    protected $localKey;
    protected $value;

    public function __construct(array $errorMsg, array $input, $fieldKey, $localKey, $args)
    {
        $this->reset($errorMsg, $input, $fieldKey, $localKey, $args);

    }

    public function reset(array $errorMsg, array $input, $fieldKey, $localKey, $args)
    {
        $this->errorMsg = $errorMsg;
        $this->input = $input;
        $this->fieldKey = $fieldKey;
        $this->args = $args;
        $this->localKey = $localKey;

        $this->value = isset($input[$fieldKey]) ? $input[$fieldKey] : null;
    }

    /**
     * @return VerifyResult
     */
    abstract public function verify();

    protected function errorMsgReplace($msg, array $other = [])
    {
        $msg = str_replace('{field}', $this->localKey ? $this->localKey : $this->fieldKey, $msg);
        $msg = str_replace('{value}', $this->value, $msg);

        foreach ($other as $key => $value) {
            $msg = str_replace("{$key}", $value, $msg);
        }

        return $msg;
    }
}