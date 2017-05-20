<?php

namespace App\Modules\Strava\Repositories;

use App\Core\AbstractRepository;
use Illuminate\Contracts\Container\Container;
use App\Modules\Strava\Models\StravaApiClient;

class StravaRepository extends AbstractRepository
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Container $app, StravaApiClient $model)
    {
        parent::__construct($app, $model);
    }
}
