<?php
require_once 'Form.php';
class SmartForm extends Form
{
private $name;
private $pass;
private $textarea;

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @param mixed $textarea
     */
    public function setTextarea($textarea)
    {
        $this->textarea = $textarea;
    }





}