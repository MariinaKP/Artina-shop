<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title', 'category_id', 'slug'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
