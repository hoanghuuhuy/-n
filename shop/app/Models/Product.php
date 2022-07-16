<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
        
    protected $guarded = [''];
    protected $table = 'products';

    public function category(){
        return $this->belongsTo(Category::class,'pro_category_id');
    }
}
