<?php

namespace App\Modules\Strava\Services;

use Illuminate\Contracts\Container\Container;
use App\Core\Service;
use App\Modules\Strava\Repositories\StravaRepository;

class StravaService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Container $app, StravaRepository $repo)
    {
        parent::__construct($app, $repo);
    }
}
