<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{   
    //wherever there is an instance of catergory
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
