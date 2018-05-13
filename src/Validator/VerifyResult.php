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

    public function __construct($status,$msg = "")
    {
        $this->status = $status;
        $this->msg = $msg;
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
    public function isStatus()
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


}