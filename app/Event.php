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

        // 'location',
        'city',
        'street_address',
        'post_code',
        'country',

        // business info
        'business_name',

        // event info
        'title',
        'description',
        'start_time',
        'end_time',
        'price',
    ];

    protected $dateFormat = 'Y-m-d';
}
