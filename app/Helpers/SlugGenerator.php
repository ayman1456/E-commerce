<?php

namespace App\Helpers;


trait SlugGenerator{
    function createSlug($class,$title){
        $slugcount = $class::where('title_slug',str()->slug($title))->count();
        $slug=str()->slug($title);
        
        if($slugcount>0){
            $slugcount++;
            $slug= $slug.'-'.$slugcount;
        }
        return $slug;
    }
}