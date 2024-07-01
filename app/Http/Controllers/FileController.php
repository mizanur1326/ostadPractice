<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;


class FileController extends Controller
{
    public function index()
    {
        return view('fileUpload');
    }

    public function store(Request $request)
    {
        $file = $request->file("uploaded-file");
        $fileName = $file->getClientOriginalName();
        $uploadPath = $file->storeAs("uploads", $fileName, "public");
        $path = Storage::url($uploadPath);
         
        return redirect(route('file.store'))->with([
            'success'=> 'File uploaded successfully!',
            'file'=> $fileName,
            'uploadPath' => $path,
            'imageUploaded' => $path,
        ]);
   
    }
}
