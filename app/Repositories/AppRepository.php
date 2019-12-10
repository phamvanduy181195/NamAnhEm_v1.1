<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Batch;

class AppRepository implements AppRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function fetchList(array $columns = ['*'], $offset = 0)
    {
        $perPage = config('common.item_per_page');

        return $this->model
            ->skip($offset)
            ->limit($perPage)
            ->get($columns);
    }

    public function paginateList($perPage, $page = null, array $columns = ['*'])
    {
        return $this->model
            ->orderBy('updated_at', 'desc')
            ->paginate($perPage, $columns, 'page', $page);
    }

    public function findById($id, array $columns = ['*'])
    {
        return $this->model
            ->find($id, $columns);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        try {
            return $this->model
                ->where('id', $id)
                ->update($data);
        } catch (\Exception $e) {
            logger()->error($e);

            return false;
        }
    }

    public function delete(array $data)
    {
        return $this->model
            ->whereIn('id', $data)
            ->delete();
    }

    public function fetchAll(array $columns = ['*'])
    {
        return $this->model->get($columns);
    }

    public function insert(array $data)
    {
        return $this->model->insert($data);
    }

    public function multipleUpdate($data, $whereColumn)
    {
        try {
            DB::beginTransaction();
            Batch::update(new $this->model, $data, $whereColumn);

            DB::commit();
            return true;
        } catch (\Exception $e) {
            logger()->error($e);
            DB::rollBack();

            return false;
        }
    }
}
