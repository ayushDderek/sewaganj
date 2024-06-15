<?php

namespace app\core\form;

class OptionField extends BaseField
{
    public function renderInput(): string
    {
        return sprintf('<select name="%s" class="form-control %s">%s</select>',
            $this->attribute,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->{$this->attribute},
        );
    }
}