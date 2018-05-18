<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/18
 * Time: 17:54
 * Purpose:
 */

namespace Mohyz\Validator;


class NumericValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {
        if (is_numeric($this->value)) {
            return new VerifyResult(true);
        }
        return new VerifyResult(false, $this->errorMsgReplace($this->errorMsg[0]));
    }
}