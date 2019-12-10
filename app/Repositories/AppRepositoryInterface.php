<?php

namespace App\Repositories;

interface AppRepositoryInterface
{
    public function getModel();
    
    public function insert(array $data);
    
    /**
     * @param array $columns
     * @param int $offset
     *
     * @return \Illuminate\Support\Collection
     */
    public function fetchList(array $columns = ['*'], $offset = 0);
    
    /**
     * @param array $columns
     * @param int $page
     * @param int $perPage
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginateList($perPage, $page = null, array $columns = ['*']);
    
    /**
     * @param $id
     * @param array $columns
     *
     * @return object|null
     */
    public function findById($id, array $columns = ['*']);
    
    /**
     * @param array $data
     *
     * @return int
     */
    public function store(array $data);
    
    /**
     * @param $id
     * @param array $data
     *
     * @return int
     */
    public function update($id, array $data);
    
    /**
     * @param array $data
     *
     * @return boolean
     */
    public function delete(array $data);
    
    /**
     * @param array $columns
     *
     * @return boolean
     */
    public function fetchAll(array $columns = ['*']);
}
