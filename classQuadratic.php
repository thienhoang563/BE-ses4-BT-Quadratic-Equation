<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    private $delta;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    public function getDelta()
    {
        return $this->delta = $this->b ** 2 - 4 * $this->a * $this->c;

    }

    public function getRoot1()
    {
        return ((-$this->b) + sqrt($this->delta)) / (2 * ($this->a));
    }

    public function getRoot2()
    {
        return ((-$this->b) - sqrt($this->delta)) / (2 * ($this->a));
    }

    public function getExperience(){
        return (-$this->b)/(2*$this->a);
    }
}


