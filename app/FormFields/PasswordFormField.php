<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class PasswordFormField extends AbstractHandler
{
    protected $codename = 'password';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.password', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
