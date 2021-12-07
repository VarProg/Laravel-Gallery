<?php 

namespace App\Service;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


/**
 * 
 */
class ImageService 
{
	

	public function getAll()
	{
		$getImages = DB::table('image')
                ->select('*')
                ->get();
        return $getImages->all();
	}

	public function getOne($id)
	{
		$getImage = DB::table('image')
                    ->select('*')
                    ->where('id', $id)
                    ->first();
        return $getImage;
	}

	public function insert($image)
	{

        return DB::table('image')->insert([
        	'image' => $image->store('uploads')
        	]);
	}

	public function update($newImage, $id)
	{

		$deleteImages = DB::table('image')
                    ->select('*')
                    ->where('id', $id)
                    ->first();
        Storage::delete($deleteImages->image);

        return DB::table('image')
            	->where('id', $id)
            	->update(['image' => $newImage->store('update')]);
	}

	public function delete($id)
	{
		$images = DB::table('image')
                    ->select('*')
                    ->where('id', $id)
                    ->first();
        Storage::delete($images->image);

        return DB::table('image')->where('id', $id)->delete();
	}
}












