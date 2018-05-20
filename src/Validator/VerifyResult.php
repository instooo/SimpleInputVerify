<?php
/**
 * Created by PhpStorm.
 * User: mohyz
 * Date: 2018/5/13
 * Time: 16:09
 */

namespace Mohyz\Validator;


class VerifyResult
{
    private $status = false;

    private $msg = "";

    private $verifyContinue = true;

    public function __construct($status,$msg = "",$verifyContinue = true)
    {
        $this->status = $status;
        $this->msg = $msg;
        $this->verifyContinue = $verifyContinue;
    }

    /**
     * @param bool $status
     * @return VerifyResult
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $msg
     * @return VerifyResult
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @return bool
     */
    public function getVerifyContinue()
    {
        return $this->verifyContinue;
    }

    /**
     * @param bool $verifyContinue
     */
    public function setVerifyContinue($verifyContinue)
    {
        $this->verifyContinue = $verifyContinue;
    }


}