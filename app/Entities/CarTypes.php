<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Logaretm\Transformers\Contracts\Transformable;
use Logaretm\Transformers\TransformableTrait;

class CarTypes extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['name', 'description'];


}
