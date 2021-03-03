<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use File;

class ZipController extends Controller
{
    public function zipCreateAndDownload()
    {
    $zip=new ZipArchive;
    $fileName='myzip.zip';
    if($zip->open(public_path($fileName),ZipArchive::CREATE)==TRUE)
       {
        $file=File::files(public_path ('img'));
        foreach($file as $key=> $value){
            $relativeName = basename($value);
            $zip->addFile($value, $relativeName);
        }
        $zip->close();

            

       }
       return response()->download(public_path ($fileName));
    }
}
