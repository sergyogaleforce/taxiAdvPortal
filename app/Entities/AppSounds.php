<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Logaretm\Transformers\Contracts\Transformable;
use Logaretm\Transformers\TransformableTrait;

class AppSounds extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['name', 'status', 'file_name', 'file_ext', 'file', 'size'];


}
