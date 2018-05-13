<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/13
 * Time: 15:54
 */

namespace Mohyz\Validator;


class MaxValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {
        if ($this->value > $this->args[0]) {

            $msg = $this->errorMsgReplace($this->errorMsg[0]);

            $errorMsg = str_replace("{max}", $this->args[0], $msg);

            return new VerifyResult(false, $errorMsg);
        }
        return new VerifyResult(true);
    }
}