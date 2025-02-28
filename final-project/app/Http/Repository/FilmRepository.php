<?php

namespace App\Http\Repository;

use App\Interface\FilmRepositoryInterface;
use App\Models\Film;

class FilmRepository implements FilmRepositoryInterface
{

    public function all()
    {
        return Film::all();
    }

    public function create(array $data)
    {
        return Film::create($data);
    }

    public function update($id, array $data)
    {
        $item = Film::findOrFail($id);
        return $item->update($data);
    }

    public function delete($id)
    {
        $film = Film::findOrFail($id);
        return $film->delete($id);
    }

    public function findById($id)
    {
        return Film::with('review')->findOrFail($id);
    }
}
