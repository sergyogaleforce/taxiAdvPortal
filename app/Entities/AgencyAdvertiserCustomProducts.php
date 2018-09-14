<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Logaretm\Transformers\Contracts\Transformable;
use Logaretm\Transformers\TransformableTrait;

class AgencyAdvertiserCustomProducts extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['agency_id', 'car_place_name', 'width', 'height', 'cost', 'prod_estimate_time', 'description'];

    public function agency()
    {
        return $this->belongsTo('App\Entities\ProductionAgency');
    }
}
