<?php

namespace domain\Services;

use App\Models\Cultivation;

class CultivationService
{
    protected $cultivations;
        
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->cultivations = new Cultivation();
    }
    
    /**
     * all
     *
     * @return Collection
     */
    public function all()
    {
        return $this->cultivations->all();
    }
        
    /**
     * get
     *
     * @param  mixed $id
     * @return void
     */
    public function get($id)
    {
        return $this->cultivations->find($id);
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
        $cultivation = $this->create($data);
        return $cultivation;
    }
       
    /**
     * create
     *
     * @param  mixed $data
     * @return void
     */
    public function create(array $data)
    {
        return $this->cultivations->create($data);
    }
            
    /**
     * update
     *
     * @param  mixed $wallet
     * @param  mixed $data
     * @return void
     */
    public function update(Cultivation $cultivations, array $data)
    {
        $cultivations->update($this->edit($cultivations, $data));
    }
        
    /**
     * edit
     *
     * @param  mixed $wallets
     * @param  mixed $data
     * @return array
     */
    public function edit(Cultivation $cultivations, array $data)
    {
        return array_merge($cultivations->toArray(), $data);
    }

    public function getItemsByCategory($data)
    {
        return $this->cultivations->getItemsByCategory($data->filter_type);
    }

    public function getItemByCategory($data)
    {
        return $this->cultivations->getItemByCategory($data->filter_item);
    }
}
