<?php
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 15/01/2018
 * Time: 19:22
 */

namespace App\Services;

class CalculatorService
{
    private $op1;
    private $op2;
    private $result;

    public function __construct($op1, $op2)
    {
        $this->setOp1($op1);
        $this->setOp2($op2);
    }

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     * @return $this
     */
    public function setOp1($op1)
    {
        $this->op1 = (int) $op1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op2
     * @return $this
     */
    public function setOp2($op2)
    {
        $this->op2 = (int) $op2;

        return $this;
    }

    public function sum()
    {
        $this->setResult($this->getOp1() + $this->getOp2());
    }

    public function subtract()
    {
        $this->setResult($this->getOp1() - $this->getOp2());
    }

    public function multiply()
    {
        $this->setResult($this->getOp1() * $this->getOp2());
    }

    public function division()
    {
        $this->setResult($this->getOp1() / $this->getOp2());
    }



    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     * @return $this
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

}