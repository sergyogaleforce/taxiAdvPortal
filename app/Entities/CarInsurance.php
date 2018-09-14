<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Logaretm\Transformers\Contracts\Transformable;
use Logaretm\Transformers\TransformableTrait;

class CarInsurance extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['car_id', 'company', 'from', 'to', 'police_number', 'insurance_type', 'coverage'];

    public function car()
    {
        return $this->belongsTo('App\Entities\Car');
    }
}
