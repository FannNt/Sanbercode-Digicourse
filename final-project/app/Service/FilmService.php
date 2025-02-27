<?php

namespace App\Service;

use App\Interface\FilmRepositoryInterface;
use App\Models\Film;
use App\Models\User;

class FilmService implements ServiceInterface
{
    protected $filmRepository;
    public function __construct(FilmRepositoryInterface $filmRepository)
    {
        $this->filmRepository = $filmRepository;
    }

    public function index()
    {
        return $this->filmRepository->all();
    }

    public function create(array $data)
    {
        return $this->filmRepository->create($data);
    }

    public function delete($id)
    {
        return $this->filmRepository->delete($id);
    }

    public function findById($id)
    {
        return $this->filmRepository->findById($id);
    }

    public function update($id, array $data)
    {
        $film = Film::findOrFail($id);
        return $film->update($data);
    }
}
