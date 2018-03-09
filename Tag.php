<?php
class  Tag
{
    /**
     * @var string
     */
    private $tag;
    /**
     * @var string
     */
    private $text;
    /**
     * @var array
     */
    private $attributes;
    public function __construct($tag)
    {
        $this->tag = $tag;
        $this->attributes = [];
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
        return $this;
    }
    public function setAttr($name,$value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }
    public function show()
    {
        $ret = '<'.$this->tag;
        foreach ($this->attributes as $name => $value){
            $ret .= ' '.$name.'="'.htmlspecialchars($value).'"';
        }
        $ret .= '>'.$this->text .'</'.$this->tag.'>';
        return $ret;
    }
    public static function getClassDescription(){
        return 'Этот '. __CLASS__.' генерирует HTML-код для одного тега';
    }
}