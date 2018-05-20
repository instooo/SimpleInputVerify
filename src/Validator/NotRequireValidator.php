<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/20
 * Time: 22:57
 */

namespace Mohyz\Validator;


class NotRequireValidator extends AbstractValidator
{

    /**
     * @return VerifyResult
     */
    public function verify()
    {

        if ($this->value === null) {
            return new VerifyResult(true, [], false);
        }

        return new VerifyResult(true);

    }
}