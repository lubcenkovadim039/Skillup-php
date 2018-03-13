<?php

class Form
{
    /**
     * @var array
     */
    private $attr;


    /**
     * @param array $attr
     */
    private function setAttr($attr)
    {
        $this->attr = $attr;

        return $this;
    }
    private function tagShow($tag)
    {
        $fet = '<'.$tag;
        foreach ($this->attr as $key => $elem){
            if(($tag === 'textarea') and ($key === 'value')){
                $text = $elem;
            } else {
                $fet .= ' ' . $key . '="' . htmlspecialchars($elem) . '"';
            }
        }
        if(isset($text)){
            $fet .= '>'.$text;
        }else {
            $fet .= '><br><br>';
        }
        return $fet;
    }

    public function open($attr)
    {
        $this->setAttr($attr);
       return $this->tagShow('form');

    }

    public function input($attr)
    {
        $this->setAttr($attr);

        return $this->tagShow('input');
    }

    public function password($attr)
    {
        $this->setAttr($attr);
        $this->attr += ['type'=>'password'];


        return $this->tagShow('input');

    }

    public function submit($attr)
    {
        $this->setAttr($attr);
        $this->attr += ['type'=>'submit'];


        return $this->tagShow('input');

    }

    public function textarea($attr)
    {
        $this->setAttr($attr);

        return $this->tagShow('textarea').'</textarea><br><br>';

    }

    public function close()
    {

        $fet = '</form>';

        return $fet;

    }


}