<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/11
 * Time: 18:18
 * Purpose:
 */

namespace Mohyz;


use Throwable;

class ValidatorException extends \Exception
{

    private $fieldKey;
    private $localFieldKey;
    private $failedValidatorName;


    public function __construct($message = "", $fieldKey = "", $localFieldKey)
    {
        $this->fieldKey = $fieldKey;
        $this->localFieldKey = $localFieldKey;
        parent::__construct($message, 0, null);
    }

    /**
     * @return mixed
     */
    public function getFieldKey()
    {
        return $this->fieldKey;
    }

    /**
     * @return mixed
     */
    public function getLocalFieldKey()
    {
        return $this->localFieldKey;
    }

    /**
     * @return mixed
     */
    public function getFailedValidatorName()
    {
        return $this->failedValidatorName;
    }
}