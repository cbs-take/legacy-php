<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $table = 'samples';

    protected $fillable = ['name'];

    public $timestamps = false;
}
