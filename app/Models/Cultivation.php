<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultivation extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'calculated_area',
    ];

    public function getItemsByCategory($category_id)
    {
        return $this->where('category_id',$category_id)->get();
    }

    public function getItemByCategory($id)
    {
        return $this->where('id',$id)->first();
    }
}
