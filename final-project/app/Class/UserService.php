<?php

namespace App\Class;

use App\Models\User;
use App\Interface\UserRepositoryInterface;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Support\Facades\Hash;

class UserService implements ServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return $this->userRepository->all();
    }

    public function create(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->userRepository->create($data);
    }

    public function delete(User $user)
    {
        return $this->userRepository->delete($user);
    }

    public function findById($id)
    {
        return User::findOrFail($id);
    }

    public function update(User $user,array $data)
    {
        if (!Hash::check($user->getAuthPassword(),$data['password'])){
            throw new HttpClientException('miss credential',404);
        }
        return $this->userRepository->update($user,$data);
    }

}
