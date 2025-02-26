<?php

namespace App\Class;

use App\Models\User;

interface ServiceInterface
{
    public function index();

    public function create(array $data);

    public function delete(User $user);

    public function findById($id);

    public function update(User $user,array $data);
}
