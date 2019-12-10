<?php


namespace App\Services;


use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\DB;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function addCategory($params)
    {
        $category = [
          'name' => $params['name'],
          'slug' => strtolower(stripAccents($params['name'])),
          'type' => strtolower(stripAccents($params['type'])),
        ];
        $addCategory = $this->categoryRepository->store($category);

        return $addCategory;
    }

    public function getListCategoryType()
    {
        $lists = $this->categoryRepository->getCategoryTypes();

        return $lists;
    }

    public function getCategoryByType($type)
    {
        return $this->categoryRepository->getCategoryByType($type);
    }

    public function updateCategory($params)
    {
        try {
            $position = 0;
            $data = [];
            $listIds = array_diff($params['list_id_old'], $params['list_id_news']);

            if (!empty($listIds)) {
                $this->categoryRepository->delete($listIds);
            }

            foreach ($params['category'] as $key => $value) {
                $position++;
                $status = isset($value['status']) && $value['status'] ? config('setting.status.active') : config('setting.status.inactive');
                $data[] = [
                    'id' => $key,
                    'status' => $status,
                    'position' => $position,
                ];
            }
            $this->categoryRepository->multipleUpdate($data, 'id');

            return true;
        } catch (\Exception $e) {
            logger()->error($e);

            return false;
        }
    }

    public function getCategoryById($id)
    {
        $category = $this->categoryRepository->findById($id);

        return $category;
    }

    public function update($id, $params)
    {
        $category = $this->categoryRepository->update($id, $params);

        return $category;
    }
}
