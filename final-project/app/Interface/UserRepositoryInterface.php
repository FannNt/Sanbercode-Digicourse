<?php

namespace App\Interface;

use App\Models\User;

interface UserRepositoryInterface
{
    public function all();

    public function create($data);

    public function update(User $user,array $data);

    public function delete(User $user);

    public function findById($id);
}
