<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=['date','horary','women_id','apples_id','status_bookings_id'];
    protected $table='bookings';

    // Relación "pertenece a" con Women
    public function woman()
    {
        return $this->belongsTo(Woman::class, 'women_id');
    }

    // Relación "pertenece a" con Apple
    public function apple()
    {
        return $this->belongsTo(Apple::class, 'apples_id');
    }

    // Relación "pertenece a" con StatusBooking
    public function statusBooking()
    {
        return $this->belongsTo(StatusBooking::class, 'status_bookings_id');
    }
}
