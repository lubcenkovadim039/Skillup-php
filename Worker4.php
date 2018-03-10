<?php

class Worker4
{
private $name;
private $age;
private $salary;

public function __construct($name,$age,$salary)
{
    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
}

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
       if($this->chekAge($age)){
           $this->age = $age;
       }
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

        public function chekAge($age)
        {
            if($age < 100){
                return true;
            } else {
                return false;
            }
        }
}