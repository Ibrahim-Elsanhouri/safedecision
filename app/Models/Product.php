<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function scopeFilter($query, $params) {
         if ( isset($params['name']) && trim($params['name'] !== '') ) 
         {
              $query->where('name', 'LIKE', trim($params['name']) . '%'); 
        } 
        return $query; }
}
