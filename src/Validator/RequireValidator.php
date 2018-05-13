<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/13
 * Time: 15:53
 */

namespace Mohyz\Validator;


class RequireValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {

        if ($this->value === null){
            return new VerifyResult(false,$this->errorMsgReplace($this->errorMsg[0]));
        }

        return new VerifyResult(true);

    }
}