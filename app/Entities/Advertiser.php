<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Logaretm\Transformers\Contracts\Transformable;
use Logaretm\Transformers\TransformableTrait;
use PhpParser\Builder;

class Advertiser extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['name', 'request_id', 'width', 'height', 'resources', 'colors', 'adv_category_id', 'car_place_id', 'description'];

    public function request()
    {
        return $this->belongsTo('App\Entities\advertiserRequest');
    }

}
