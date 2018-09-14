<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Logaretm\Transformers\Contracts\Transformable;
use Logaretm\Transformers\TransformableTrait;

class Car extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['driver_id', 'brand', 'model', 'miles', 'color', 'crashes', 'crashes_description', 'owner_type'];

    public function driver()
    {
        return $this->belongsTo('App\Entities\Driver');
    }

    public function insurances()
    {
        return $this->hasMany('App\Entities\CarInsurance');
    }

    public function pictures()
    {
        return $this->hasMany('App\Entities\CarPictures');
    }
}
