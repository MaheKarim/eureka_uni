<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HallBooking extends Model
{
    use HasFactory;

    protected $guarded = [ ];

    public function user()
    {
         return $this->belongsTo(User::class);
    }

    public function dorm()
    {
        return $this->belongsTo(Dorm::class);
    }

}
