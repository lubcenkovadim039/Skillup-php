<?php
class User
{

    protected $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getName()
    {
        return $this->age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

}

class Worker extends User {
    private $salary;

   public function  __construct($name, $age,$salary)
   {
       parent::__construct($name, $age);
       $this->name = $name;
       $this->salary = $salary;
   }

    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

}

$customer = new User('коля',25);
//$customer->name = 'Коля';
//$customer->age = 25;


//echo $customer->name;
//echo $customer->age;

$customer2 = new User('Вася,28');
//$customer2->name = 'Вася';
//$customer2->age = 28;
//echo $customer->age + $customer2->age;


//echo $customer->age.'<br>';
//$customer->addYearsToAge(10);
//echo $customer->age;
$worker = new Worker('Иван',35,20000);
//$worker->setSalary(20000);
$worker->setAge(30);