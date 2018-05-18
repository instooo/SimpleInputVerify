<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/16
 * Time: 15:17
 * Purpose:
 */

namespace Mohyz\Validator;


class EmailValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {
        if (filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            return new VerifyResult(true);
        }
        return new VerifyResult(false, $this->errorMsgReplace($this->errorMsg[0]));
    }
}