<?php

namespace App\ContentTypes;

use TCG\Voyager\Http\Controllers\ContentTypes\BaseType;

class PasswordContentType extends BaseType
{
    /**
     * @return null|string
     */
    public function handle()
    {
        return empty($this->request->input($this->row->field)) ? null :
            bcrypt($this->request->input($this->row->field));
    }
}
