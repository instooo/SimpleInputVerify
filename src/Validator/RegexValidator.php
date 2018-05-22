<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/22
 * Time: 14:12
 * Purpose:
 */

namespace Mohyz\Validator;


class RegexValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {
        if (preg_match($this->args[0], $this->value)) {
            return new VerifyResult(true);
        }
        return new VerifyResult(false,
            $this->errorMsgReplace($this->errorMsg[0], ['regex' => $this->args[0]]));
    }
}