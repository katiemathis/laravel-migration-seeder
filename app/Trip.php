<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['departure_city','arrival_city','departure_date','return_date','passenger_name','passenger_last_name','price'];

}
