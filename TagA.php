<?php
require_once 'Tag.php';
/**
 * Created by PhpStorm.
 * User: vad
 * Date: 09.03.18
 * Time: 20:41
 */

class TagA extends Tag
{
    public function __construct()
    {
        parent::__construct('a');
    }

    public function setHref($href)
    {
        parent::setAttr('href',$href);

        return $this;
    }

    public function setTargetBlank()
    {
        parent::setAttr('target','_blank');

        return $this;
    }
}