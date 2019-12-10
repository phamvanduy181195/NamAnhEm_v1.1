<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends AppRepository
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function getCategoryTypes()
    {
        $types = $this->model->pluck('type', 'type');

        return $types;
    }

    public function getCategoryByType($type)
    {
        $category = $this->model->where('type', $type)->orderBy('position')->get();

        return $category;
    }
}
