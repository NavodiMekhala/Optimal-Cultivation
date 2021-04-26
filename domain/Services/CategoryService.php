<?php

namespace domain\Services;

use App\Models\Category;

class CategoryService
{
    protected $categories;
        
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = new Category();
    }
    
    /**
     * all
     *
     * @return Collection
     */
    public function all()
    {
        return $this->categories->all();
    }
        
    /**
     * get
     *
     * @param  mixed $id
     * @return void
     */
    public function get($id)
    {
        return $this->categories->find($id);
    }
    
    /**
     * make
     *
     * @param  mixed $data
     * @param  mixed $fire_event
     * @return void
     */
    public function make(array $data)
    {
        if ($this->getByCategoryName($data['name']) == null) {
            $this->create($data);
        }
    }
       
    /**
     * create
     *
     * @param  mixed $data
     * @return void
     */
    public function create(array $data)
    {
        return $this->categories->create($data);
    }
            
    /**
     * update
     *
     * @param  mixed $wallet
     * @param  mixed $data
     * @return void
     */
    public function update(Category $categories, array $data)
    {
        $categories->update($this->edit($categories, $data));
    }
        
    /**
     * edit
     *
     * @param  mixed $wallets
     * @param  mixed $data
     * @return array
     */
    public function edit(Category $categories, array $data)
    {
        return array_merge($categories->toArray(), $data);
    }
    
    /**
     * getByCategoryName
     *
     * @param  mixed $name
     * @return void
     */
    public function getByCategoryName($name)
    {
        return $this->categories->getByCategoryName($name);
    }
}
