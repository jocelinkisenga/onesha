<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProductRepositorie {

	public static  function save_photo (UploadedFile $image){

        $image_name = self::rename_file($image);
        $chemin_photo = $image->storeAs('images',$image_name,'public_uploads');
        return $image_name;
		}

	public static function rename_file($file){

		$new_name =time().'.' .$file->getClientOriginalName();
		return $new_name;
	}
}