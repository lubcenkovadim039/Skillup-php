<?php
require_once 'Form.php';

class SmartForm extends Form
{
    public function input($attr){
        $attr = $this->processValue($attr);
        return parent::input($attr);
    }
    public function password($attr){
        $attr = $this->processValue($attr);
        return parent::password($attr);
    }
    public function textarea($attr)
    {
        $attr = $this->processValue($attr);
        return parent::textarea($attr);
    }
    protected function renderAttributes($attr)
    {
        $attr = $this->processValue($attr);
        return parent::renderAttr($attr);
    }
    private function processValue($attr) {
        if (isset($attr['name'])) {
            $name = $attr['name'];
            if (isset($_POST[$name])) {
                $attr['value'] = $_POST[$name];
            }
        }
        return $attr;
    }
}
