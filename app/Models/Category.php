<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use  App\Models\User;
use App\Models\Entreprise;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name','entreprise_id'];

    public function products(){
        return $this->hasMany(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }

}
