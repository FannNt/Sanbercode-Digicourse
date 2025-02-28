<?php

namespace App\Service;

use App\Interface\GenreRepositoryInterface;

class GenreService implements ServiceInterface
{
    protected $genreRepository;
    public function __construct(GenreRepositoryInterface $genreRepository)
    {
        $this->genreRepository = $genreRepository;
    }

    public function index()
    {
        return $this->genreRepository->all();
    }

    public function create(array $data)
    {
        return $this->genreRepository->create($data);
    }

    public function delete($id)
    {
        return $this->genreRepository->delete($id);
    }

    public function findById($id)
    {
        return $this->genreRepository->findById($id);
    }

    public function update($id, array $data)
    {
        return $this->genreRepository->update($id,$data);
    }
}
