<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function getAll($perPage = null)
{
    if ($perPage) {
        return Category::paginate($perPage);
    }

    return Category::all();
}


    public function find($id)
    {
        return Category::find($id);
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function update($id, array $data)
    {
        $category = $this->find($id);
        if ($category) {
            $category->update($data);
        }
        return $category;
    }

    public function delete($id)
    {
        $category = $this->find($id);
        if ($category) {
            $category->delete();
        }
        return $category;
    }
}
