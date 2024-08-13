<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'thumb',
        'author_id',
       
    ];

    public function author() {
        return $this->hasOne(Author::class,'id','author_id');
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'category_post');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'tag_post');
    }


}
