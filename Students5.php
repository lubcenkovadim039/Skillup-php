<?php
require_once 'Worker5.php';
class Students5 extends Worker5
{
private $class;
private $dozenendiya ;

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getDozenendiya()
    {
        return $this->dozenendiya;
    }

    /**
     * @param mixed $dozenendiya
     */
    public function setDozenendiya($dozenendiya)
    {
        $this->dozenendiya = $dozenendiya;
    }

}