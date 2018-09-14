<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Logaretm\Transformers\Contracts\Transformable;
use Logaretm\Transformers\TransformableTrait;

class CarPictures extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['car_id', 'file_name', 'file_ext', 'file', 'file_size'];

    public function car()
    {
        return $this->belongsTo('App\Entities\Car');
    }
}
