<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\User;

class Category extends Model
{
    protected $fillable = [
        'name','description'
    ];
    
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

   
    
    
}
