<?php

namespace App\Repositories;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserRepository
{
    /**
     * @return Collection
     */
    public function getUserPost() : Collection
    {
        return User::with(['post' => function (HasOne $query) {
                $query->where('id', '<', '6');
            }])
            ->where('id', '>', 2)
            ->get();

    }
}