<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;
use App\Tag;

class Article extends Model
{
    
    protected $fillable = [
        'name','image','publish_date',
        'writer','description'
    ];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    
}
