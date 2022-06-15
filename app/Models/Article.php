<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','categorie_id','title','description'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function categorie(){
        return $this->belongsTo(Category::class);
    }
}
