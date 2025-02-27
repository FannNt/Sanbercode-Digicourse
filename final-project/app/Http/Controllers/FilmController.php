<?php

namespace App\Http\Controllers;

use App\Http\Requests\Film\CreateRequest;
use App\Http\Requests\Film\UpdateRequest;
use App\Service\FilmService;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    protected $filmService;
    public function __construct(FilmService $filmService)
    {
        $this->filmService = $filmService;
    }

    public function index()
    {
        return $this->filmService->index();
    }

    public function create(CreateRequest $request)
    {
        return $this->filmService->create($request->validated());
    }

    public function update($id, UpdateRequest $request)
    {
        return $this->filmService->update($id, $request->validated());
    }

    public function delete($id)
    {
        return $this->filmService->delete($id);
    }
}
