<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //


    protected $table ='lesson';
    protected $fillable = [
        'id', 'index_name', 'image_url','lesson',
    ];
}
