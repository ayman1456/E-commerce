<?php

namespace App\Helpers;

trait MediaUploader{
    function uploadSimgleMedia($file,$filename,$dirname,$accessibilty='public'){

        if($file)
        {
            $filename= $filename.'.'.$file->getClientOriginalExtension();
            $mediapath=$file->storeAs($dirname,$filename,$accessibilty);
            return $mediapath;
        }
        
    }
}