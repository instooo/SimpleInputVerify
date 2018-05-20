<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/20
 * Time: 21:43
 */

namespace Mohyz\Validator;


class InValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {
        if (in_array($this->value, $this->args)) {
            return new VerifyResult(true);
        }
        return new VerifyResult(false, $this->errorMsgReplace($this->errorMsg[0],['args'=>implode(",",$this->args)]));
    }
}