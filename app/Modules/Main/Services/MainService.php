<?php

namespace App\Modules\Main\Services;

use Illuminate\Contracts\Container\Container;
use App\Core\Service;
use App\Modules\Main\Repositories\MainRepository;

class MainService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Container $app, MainRepository $repo)
    {
        parent::__construct($app, $repo);
    }
}
