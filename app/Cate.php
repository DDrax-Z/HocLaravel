<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'cates';

    protected $filltable = ['name','alias','order','parent_id','keywords','decription'];

    public $timestamps = false;
}
