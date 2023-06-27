<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'reservationable_id', 'reservationable_type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reservationable()
    {
        return $this->morphTo();
    }
}
