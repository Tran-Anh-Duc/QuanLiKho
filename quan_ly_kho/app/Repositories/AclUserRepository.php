<?php

namespace App\Repositories;

use App\Models\AclUser;
use App\Repositories\BaseRepository;


class AclUserRepository extends BaseRepository
{

    public function getModel()
    {
        return AclUser::class;
    }


}
