<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_images extends Model
{
    protected $table = 'product_images';

    protected $filltable = ['image','product_id'];

    public $timestamps = false;
}
