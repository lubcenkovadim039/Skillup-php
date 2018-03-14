<?php

class Form
{
    public function renderAttr($attr)
    {
        $ret = ' ';
        foreach ($attr as $types=>$values){
            $ret .= ' '.$types.'="'.htmlspecialchars($values).'" ';
        }
        return $ret;
    }
   public  function  open($attr)
   {
       return '<form '.$this->renderAttr($attr).' ><br>';
   }

    public  function  input($attr)
    {
        return '<input '.$this->renderAttr($attr).'><br>';
    }

    public  function  password($attr)
    {
        return '<input type = "password" '.$this->renderAttr($attr).'><br>';
    }

    public  function  textarea($attr)
    {

            $value = $attr['value'];
            unset($attr['value']);

        return '<textarea '.$this->renderAttr($attr).' >'.htmlspecialchars($value).'</textarea><br>';
    }

    public  function submit($attr)
    {
        return '<input type = "submit" '.$this->renderAttr($attr).' ><br>';
    }

    public  function  close()
    {
        return '</form>';
    }

}