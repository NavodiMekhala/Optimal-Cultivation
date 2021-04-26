<?php

namespace domain\Services;

use App\Models\Climate;

class ClimateService
{
    protected $climates;
        
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->climates = new Climate();
    }
    
    /**
     * all
     *
     * @return Collection
     */
    public function all()
    {
        return $this->climates->all();
    }
        
    /**
     * get
     *
     * @param  mixed $id
     * @return void
     */
    public function get($id)
    {
        return $this->climates->find($id);
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
        $climate = $this->create($data);
        return $climate;
    }
       
    /**
     * create
     *
     * @param  mixed $data
     * @return void
     */
    public function create(array $data)
    {
        return $this->climates->create($data);
    }
            
    /**
     * update
     *
     * @param  mixed $wallet
     * @param  mixed $data
     * @return void
     */
    public function update(Climate $climates, array $data)
    {
        $climates->update($this->edit($climates, $data));
    }
        
    /**
     * edit
     *
     * @param  mixed $wallets
     * @param  mixed $data
     * @return array
     */
    public function edit(Climate $climates, array $data)
    {
        return array_merge($climates->toArray(), $data);
    }

    public function getClimate($data)
    {
        return $this->climates->getClimate($data->climate);
    }
}
