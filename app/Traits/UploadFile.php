<?php

namespace App\Traits;

trait UploadFile
{
    public function upload($imgeFile , $path){
    $imgExt=$imgeFile->getClientOriginalExtension();
    $filename=time() . '-' . $imgExt;        
    $path='assets/images';
    $imgeFile->move($path,$filename);
    return $filename;
    }
}
