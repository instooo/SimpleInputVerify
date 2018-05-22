<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/22
 * Time: 14:29
 * Purpose:
 */

namespace Mohyz\Validator;


class NotEmptyValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {
        // TODO: Implement verify() method.

        if ($this->value === 0 || $this->value === '0' || !empty($this->value)) {
            return new VerifyResult(true);
        }
        return new VerifyResult(false, $this->errorMsgReplace($this->errorMsg[0]));

    }
}