<?php

namespace App\Http\Repository;

use App\Models\User;
use App\Interface\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function all()
    {
        return User::all();
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update(User $user, array $data)
    {
        return $user->update($data);
    }

    public function delete(User $user)
    {
        return $user->delete();
    }

    public function findById($id)
    {
        return User::findOrFail($id);
    }
}
