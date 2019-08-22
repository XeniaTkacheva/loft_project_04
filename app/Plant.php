<?php

namespace App;

use Hamcrest\Thingy;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
