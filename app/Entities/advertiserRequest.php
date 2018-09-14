<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Logaretm\Transformers\Contracts\Transformable;
use Logaretm\Transformers\TransformableTrait;

class advertiserRequest extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['client_id', 'car_model', 'car_brand', 'demographic_id', 'ethnic', 'driving_from', 'driving_to', 'start', 'end', 'verif_schedule_type', 'car_place'];

    public function client()
    {
        return $this->belongsTo('App\Entities\Client');
    }
}
