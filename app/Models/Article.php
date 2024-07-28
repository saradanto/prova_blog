<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'image', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


    public function categories() {
        return $this->belongsToMany(Category::class, 'article_category');
    }
}
