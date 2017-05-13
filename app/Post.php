<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        // 'location',
        'city',
        'state',
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
}
