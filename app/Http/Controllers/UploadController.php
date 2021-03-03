<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadform()
    {
        return view('upload');
    }
    public function uploadfile(Request $req)
    {
       $req->file->store('public');
       return "File has been uploaded successfully!";
    }
}
