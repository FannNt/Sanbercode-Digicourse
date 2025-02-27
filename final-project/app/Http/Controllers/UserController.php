<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Service\UserService;
use App\Http\Requests\User\CreateRequest;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        $users = $this->userService->index();
        return view('Film.index', compact('users'));
    }

    public function create(CreateRequest $request)
    {
        $this->userService->create($request->validated());
    }

    public function update(User $user, UpdateRequest $request)
    {
        $this->userService->update($user,$request->validated());
    }

    public function delete(User $user)
    {
        $this->userService->delete($user);
    }

    public function findById($id)
    {
        $this->userService->findById($id);
    }
}
