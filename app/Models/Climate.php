<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Climate extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'rainfall',
        'temperature',
        'pressure',
    ];

    public function getClimate($climate){
        if ($climate == 1) {
            return $this->where('date', '=' , Carbon::now()->format('Y-m-d'))->first('rainfall');
        } elseif($climate == 2) {
            return $this->where('date', '=', Carbon::now()->format('Y-m-d'))->first('temperature');
        } elseif($climate == 3){
            return $this->where('date', '=', Carbon::now()->format('Y-m-d'))->first('pressure');
        }
        
    }
}
