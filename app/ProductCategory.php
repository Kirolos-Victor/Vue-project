<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_categories';
    public $timestamps = true;
    protected $fillable = array('category_id','product_id');


}
