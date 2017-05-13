<?php

namespace App\Modules\Users\Repositories;

use App\Core\AbstractRepository;
use Illuminate\Contracts\Container\Container;
use App\Modules\Users\Models\Users;

class UsersRepository extends AbstractRepository
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Container $app, Users $model)
    {
        parent::__construct($app, $model);
    }
}
