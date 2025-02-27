<?php

namespace App\Service;

use App\Models\Film;
use App\Models\User;

class FilmService implements ServiceInterface
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

    public function create(array $data)
    {
        return $this->filmService->create($data);
    }

    public function delete($id)
    {
        return $this->filmService->delete($id);
    }

    public function findById($id)
    {
        return $this->filmService->findById($id);
    }

    public function update($id, array $data)
    {
        $film = Film::findOrFail($id);
        return $film->update($data);
    }
}
