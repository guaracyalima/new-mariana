<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Asset extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'album_id',
        'img'

    ];

}
