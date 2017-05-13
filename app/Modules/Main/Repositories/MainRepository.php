<?php

namespace App\Modules\Main\Repositories;

use App\Core\AbstractRepository;
use Illuminate\Contracts\Container\Container;
use App\Modules\Main\Models\Main;

class MainRepository extends AbstractRepository
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Container $app, Main $model)
    {
        parent::__construct($app, $model);
    }
}
