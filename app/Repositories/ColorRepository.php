<?php

namespace App\Repositories;

use App\Models\Color;

class ColorRepository
{
    public function getAll($perPage = 10)
    {
        return Color::orderBy('id', 'desc')->paginate($perPage);
    }

    public function findById($id)
    {
        return Color::findOrFail($id);
    }

    public function create(array $data)
    {
        return Color::create($data);
    }

    public function update($id, array $data)
    {
        $color = $this->findById($id);
        $color->update($data);
        return $color;
    }

    public function delete($id)
    {
        return Color::destroy($id);
    }
}
