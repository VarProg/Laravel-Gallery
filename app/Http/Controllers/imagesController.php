<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Service\ImageService;


class imagesController extends Controller
{
    private $images;

    function __construct(ImageService $imageService)
    {
        $this->images = $imageService;
    }

    function index() {

        $myImages = $this->images->getAll();

        return view('welcome', ['imageInView'   =>  $myImages]);
    }

    function create(){

        return view('create');
    }

    function show($id){
        
        $myImages = $this->images->getOne($id);

        return view('show', ['imageInView'  =>  $myImages->image]);
    }

    function edit($id){
        
        $myImages = $this->images->getOne($id);

        return view('edit', ['imageInView' => $myImages]);
    }

    function store(Request $request){
        $image = $request->file('image');

        $this->images->insert($image); 

        return redirect('/');
    }

    function update(Request $request, $id){
        
        $this->images->update($request->image, $id);

        return redirect('/');
    }

    function delete($id){
        
        $this->images->delete($id);

        return redirect('/');
    }
}
