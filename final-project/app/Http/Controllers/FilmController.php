<?php

namespace App\Http\Controllers;

use App\Http\Requests\Film\CreateRequest;
use App\Http\Requests\Film\UpdateRequest;
use App\Models\Genre;
use App\Service\FilmService;

class FilmController extends Controller
{
    protected $filmService;
    public function __construct(FilmService $filmService)
    {
        $this->filmService = $filmService;
    }

    public function editForm($id)
    {
        $film = $this->filmService->findById($id);
        $genres = Genre::all();

        return view('Film.edit', compact('film','genres'));
    }
    public function index()
    {
        $films = $this->filmService->index();
        $genres = Genre::all();
        return view('Film.index', compact('films','genres'));
    }


    public function create(CreateRequest $request)
    {
        $this->filmService->create($request->validated());
        return redirect(route('film'));
    }

    public function update($id, UpdateRequest $request)
    {
         $this->filmService->update($id, $request->validated());
         return redirect(route('film'));
    }

    public function delete($id)
    {
        $this->filmService->delete($id);
        return redirect(route('film'));
    }

    public function findById($id)
    {
        $film = $this->filmService->findById($id);
        return view('Film.detail', compact('film'));
    }
}
