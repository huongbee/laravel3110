<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    public $table = 'foods';

    function pageUrl(){
        return $this->belongsTo('App\PageUrl','id_url','id');
    }
    
}

