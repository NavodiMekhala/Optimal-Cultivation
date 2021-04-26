<?php

namespace domain\Services;

use Carbon\Carbon;
use domain\Facades\CategoryFacade;
use domain\Facades\ClimateFacade;
use domain\Facades\CultivationFacade;

class HomeService
{

    /**
     * Inset tempProduction by auth
     * @return tempProduction
     */
    public function import(array $data)
    {
        $cultivations = CultivationFacade::all();
        foreach($cultivations as $cultivation){
            $cultivation->delete();
        }
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
                $data1['calculated_profit'] = $value[8];
                $data1['calculated_harvest'] = $value[9];
                CultivationFacade::make($data1);
            }
        }
        $climates = ClimateFacade::all();
        foreach ($climates as $climate) {
            $climate->delete();
        }
        $fileD1 = fopen($data['file1'], "r");
        $column = fgetcsv($fileD1);
        while (!feof($fileD1)) {
            $rowData1[] = fgetcsv($fileD1);
        }
        foreach ($rowData1 as $value) {
            if ($value != false) {
                ClimateFacade::make([
                    'date' => $value[0],
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
        return $date->format('m');
    }
}
