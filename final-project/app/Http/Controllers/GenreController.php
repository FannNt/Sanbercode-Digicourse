<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\CreateRequest;
use App\Http\Requests\Genre\UpdateRequest;
use App\Service\GenreService;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    protected $genreService;

    public function __construct(GenreService $genreService)
    {
        $this->genreService = $genreService;
    }

    public function editForm($id)
    {
        $genre = $this->genreService->findById($id);
        return view('genre.edit', compact('genre'));
    }
    public function index()
    {
        $genres = $this->genreService->index();
        return view('genre.index',compact('genres'));
    }
    public function create(CreateRequest $request)
    {
        $this->genreService->create($request->validated());
        return redirect(route('genre'));
    }

    public function update($id,UpdateRequest $request)
    {
        $this->genreService->update($id, $request->validated());
        return redirect(route('genre'));
    }

    public function delete($id)
    {
        $this->genreService->delete($id);
        return redirect(route('genre'));
    }

    public function findById($id)
    {
        $genre = $this->genreService->findById($id);
        return view('genre.detail',compact('genre'));
    }
}
