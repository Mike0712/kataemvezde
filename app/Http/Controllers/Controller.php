<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $model;

    /*
     * Медод для обработки формы добавления записи
     */
    /*public function create(Request $request)
    {
        if (csrf_token() == $request::only('_token')['_token']){
            $model = $this->model;
            $fields = $model->getFillable();
            $data = $request::only($fields);
            $this->validateWith($model->validate($data));

            $model->fill($data);
            $model->save();
        }
    }*/
}
