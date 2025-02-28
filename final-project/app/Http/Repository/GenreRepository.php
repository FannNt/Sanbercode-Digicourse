<?php

namespace App\Http\Repository;

use App\Interface\GenreRepositoryInterface;
use App\Models\Genre;

class GenreRepository implements GenreRepositoryInterface
{

    public function all()
    {
        return Genre::all();
    }

    public function create(array $data)
    {
        return Genre::create($data);
    }

    public function update($id, array $data)
    {
        $genre = Genre::findOrFail($id);
        return $genre->update($data);
    }

    public function delete($id)
    {
        $genre = Genre::with('film')->findOrFail($id);
        foreach ($genre->film as $film) {
            $film->delete();
        }

        $genre->delete();
        return $genre;
    }

    public function findById($id)
    {
        return Genre::findOrFail($id);

    }
}
