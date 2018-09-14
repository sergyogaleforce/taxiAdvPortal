<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Logaretm\Transformers\TransformableTrait;

class AgencyReviews extends Model
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['prod_agency_id', 'client_id', 'score', 'description'];

    public function agency()
    {
        return $this->belongsTo('App\Entities\ProductionAgency');
    }

    public function client()
    {
        return $this->belongsTo('App\Entities\Client');
    }
}
