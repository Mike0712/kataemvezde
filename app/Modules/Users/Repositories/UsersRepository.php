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
    public function __construct(Container $app, User $model)
    {
        parent::__construct($app, $model);
    }
}
