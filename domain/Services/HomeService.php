<?php

namespace domain\Services;

use Carbon\Carbon;
use domain\Facades\CategoryFacade;
use domain\Facades\ClimateFacade;
use domain\Facades\CultivationFacade;

class HomeService
{
    
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
        $category = $this->create($data);
        return $category;
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
     * Inset tempProduction by auth
     * @return tempProduction
     */
    public function import(array $data)
    {
        $fileD = fopen($data['file2'], "r");
        $column = fgetcsv($fileD);
        while (!feof($fileD)) {
            $rowData[] = fgetcsv($fileD);
        }
        foreach ($rowData as $value) {
            if ($value != false) {
                $split = explode("X", $value[5]);
                if ($split[1][0] == 1) {
                    CategoryFacade::make(['name' => 'vegetable']);
                    $data1['category_id'] = '1';
                } elseif ($split[1][0] == 2) {
                    CategoryFacade::make(['name' => 'fruit']);
                    $data1['category_id'] = '2';
                } elseif ($split[1][0] == 3) {
                    CategoryFacade::make(['name' => 'other']);
                    $data1['category_id'] = '3';
                }
                $data1['name'] = $value[6];
                $data1['calculated_area'] = $value[10];
                CultivationFacade::make($data1);
            }
        }
        $fileD1 = fopen($data['file1'], "r");
        $column = fgetcsv($fileD1);
        while (!feof($fileD1)) {
            $rowData1[] = fgetcsv($fileD1);
        }
        foreach ($rowData1 as $value) {
            if ($value != false) {
                ClimateFacade::make([
                    'date' => $this->changeDateFormate($value[0]),
                    'rainfall' => $value[1],
                    'temperature' => $value[2],
                    'pressure' => $value[3],
                ]);

            }
        }
    }

    /**
    * Change Date Formate
    * @return tempProduction
    */
    public function changeDateFormate($value)
    {
        $date = Carbon::parse($value);
        return $date->format('Y-m-d');
    }
}
