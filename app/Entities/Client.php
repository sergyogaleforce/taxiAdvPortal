<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Logaretm\Transformers\Contracts\Transformable;
use Logaretm\Transformers\TransformableTrait;

class Client extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['agency_name', 'agency_description', 'address', 'birthday', 'mobile_id', 'mobile', 'phone', 'fax', 'client_logo_id', 'countable_id'];

    public function request()
    {
        return $this->belongsTo('App\Entities\advertiserRequest');
    }
}
