<?php

namespace Projeto\Http\Controllers;

use Projeto\Http\Requests;
use Illuminate\Http\Request;
use \Input as Input;


class UploadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $image = new Image();
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required'
        ]);
        $image->title = $request->title;
        $image->description = $request->description;
        if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

            $name = $timestamp. '-' .$file->getClientOriginalName();

            $image->filePath = $name;

            $file->move(public_path().'/images/', $name);
        }
        $image->save();
        return $this->create()->with('success', 'Image Uploaded Successfully');
    }
    //http://devartisans.com/articles/image-upload-laravel-5
    //http://tutsnare.com/upload-files-in-laravel/
}
