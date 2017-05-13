<?php

namespace App\Modules\Users\Services;

use Illuminate\Contracts\Container\Container;
use App\Core\Service;
use App\Modules\Users\Repositories\UsersRepository;

class UsersService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Container $app, UsersRepository $repo)
    {
        parent::__construct($app, $repo);
    }
}
