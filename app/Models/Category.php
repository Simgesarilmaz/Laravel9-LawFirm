<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function parent()
    {
        return $this->belongsTo(Category::class,'parentid');
    }
    public function children()
    {
        return $this->hasMany(Category::class,'parentid');
    }
}
