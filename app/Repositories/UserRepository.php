<?php

namespace App\Repositories;

use App\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    /**
     * @return Collection
     */
    public function getUserPost() : Collection
    {
        return User::with('post')
            ->where('id', '>', 2)
            ->where('id', '<', 6)
            ->get();
    }
}