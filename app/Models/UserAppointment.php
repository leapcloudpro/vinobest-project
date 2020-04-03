<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAppointment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'tour_date_id', 'allergies'
    ];
}
