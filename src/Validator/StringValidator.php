<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/18
 * Time: 18:04
 * Purpose:
 */

namespace Mohyz\Validator;


class StringValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {
        if (is_string($this->value)) {
            return new VerifyResult(true);
        }
        return new VerifyResult(false, $this->errorMsgReplace($this->errorMsg[0]));
    }
}