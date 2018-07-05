<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/18
 * Time: 18:25
 * Purpose:
 */

namespace Mohyz\Validator;


class DateValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {
        if (strtotime($this->value)!==false) {
            return new VerifyResult(true);
        }
        return new VerifyResult(false, $this->errorMsgReplace($this->errorMsg[0]));
    }
}