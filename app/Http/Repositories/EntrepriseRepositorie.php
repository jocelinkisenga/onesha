<?php

namespace App\Http\Repositories;

use App\Models\Entreprise;
use Auth;
class EntrepriseRepositorie {

	public function entreprise_name(){
		$user_id = Auth::user()->id;
		$entreprise = Entreprise::whereUser_id($user_id)->get();

		foreach($entreprise as $entreprises){
			$entreprise_name = $entreprises->name;
			return $entreprise_name;
		}
	}

	public function all_entreprise(){
		$entreprises = Entreprise::all();
		return $entreprises;
	}

	public function entreprise_url($name){
		$entreprise = Entreprise::whereUrl_name($name)->get();

		foreach($entreprise as $entreprises){
			$entreprise_name = $entreprises->url_name;
			return $entreprise_name;
		}

	}

	public function entreprise_id($name){
		$entreprise = Entreprise::whereUrl_name($name)->get();

		foreach($entreprise as $entreprises){
			$entreprise_id = $entreprises->id;
			return $entreprise_id;
		}

	}




}