<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\EntrepriseRepositorie;
use App\Models\Entreprise;
use App\Models\Category;

class HomeController extends Controller
{
    
    public function entreprise(string $url){
        Entreprise::all();
        $entreprise = new EntrepriseRepositorie();
        $url_name = $entreprise->entreprise_url($url);
        $entreprise_id = $entreprise->entreprise_id($url);

        if($url_name){
            $entreprises = Entreprise::where('url_name',$url)->get();
            $categories = Category::where('entreprise_id',$entreprise_id)->with('products')->get();
            
            dd($categories);
            return view('shop.index',['entreprises'=>$entreprises, 'product_categories'=>$categories]);
        }else{
            return redirect(route('index'));
        }

        

    }
}
