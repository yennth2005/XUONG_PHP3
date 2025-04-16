<?php

namespace App\Services;

use App\Repositories\ColorRepository;

class ColorService
{
    protected $repo;

    public function __construct(ColorRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getAll($perPage = 10)
    {
        return $this->repo->getAll($perPage);
    }

    public function create(array $data)
    {
        return $this->repo->create($data);
    }

    public function findById($id)
    {
        return $this->repo->findById($id);
    }

    public function update($id, array $data)
    {
        return $this->repo->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repo->delete($id);
    }
}
