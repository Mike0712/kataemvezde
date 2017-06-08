<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppModel extends Model
{
    /**
     * @param $data
     * @param string $behavior
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validate($data) {
        return validator($data);
    }

    public function getFillable()
    {
        return $this->fillable;
    }
}
