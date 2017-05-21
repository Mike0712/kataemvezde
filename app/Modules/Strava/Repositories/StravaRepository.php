<?php

namespace App\Modules\Strava\Repositories;

use App\Core\AbstractRepository;
use Illuminate\Contracts\Container\Container;
use App\Modules\Strava\Models\Strava;

class StravaRepository extends AbstractRepository
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Container $app, Strava $model)
    {
        parent::__construct($app, $model);
    }
}
