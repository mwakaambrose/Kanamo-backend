<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'post_client_name',
        'title',
        'advert',
        'start_time',
        'stop_time',
        'date',
        'price',
        'coordinates',
        'picture_url',
    ];
}
