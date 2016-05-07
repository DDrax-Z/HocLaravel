<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';

    protected $filltable = ['name','alias','price','intro','content','image','keywords','description','user_id','cate_id'];

    public $timestamps = false;
}
