<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepo;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function getAll($perPage = null)
{
    return $this->categoryRepo->getAll($perPage);
}


    public function find($id)
    {
        return $this->categoryRepo->find($id);
    }

    public function create(array $data)
    {
        return $this->categoryRepo->create($data);
    }

    public function update($id, array $data)
    {
        return $this->categoryRepo->update($id, $data);
    }

    public function delete($id)
    {
        return $this->categoryRepo->delete($id);
    }
}
