<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/18
 * Time: 17:52
 * Purpose:
 */

namespace Mohyz\Validator;


class UrlValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {
        if (filter_var($this->value, FILTER_VALIDATE_URL)) {
            return new VerifyResult(true);
        }
        return new VerifyResult(false, $this->errorMsgReplace($this->errorMsg[0]));
    }
}