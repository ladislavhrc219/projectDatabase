<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'title'
    ];

    public function items()
    {
        return $this->belongsToMany(Items::class);
    }

    public function subcategory()
    {
        return $this->hasMany(SubCategory::class);
    }





}
