<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/14
 * Time: 18:02
 * Purpose:
 */

namespace Mohyz\Validator;


class MinValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {
        if ($this->value < $this->args[0]) {

            $msg = $this->errorMsgReplace($this->errorMsg[0], ['min' => $this->args[0]]);

            return new VerifyResult(false, $msg);
        }
        return new VerifyResult(true);
    }
}