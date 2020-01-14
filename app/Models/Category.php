<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'slug'
    ];

    public function ArticleCount(){
        return $this->hasMany('App\Models\Article','category_id','id')->where('status',1)->count();
    }
}
