<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Logaretm\Transformers\TransformableTrait;

class AgencyAdvertiserProducts extends Model
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['agency_id', 'car_place_id', 'cost', 'prod_estimate_time', 'description', 'status'];

    public function agency()
    {
        return $this->belongsTo('App\Entities\ProductionAgency');
    }

    public function carPlace()
    {
        return $this->belongsTo('App\Entities\CarPlace');
    }
}
