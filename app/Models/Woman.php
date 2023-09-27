<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woman extends Model
{
    use HasFactory;
    protected $fillable=['identification_type_id','identification_number','name','last_name','phone_number','city','address','occupation','services_id','users_id'];
    protected $table='women';

    public function identificationType()
{
    return $this->belongsTo(Identification_Type::class, 'identification_type_id');
}

public function service()
{
    return $this->belongsTo(Service::class, 'services_id');
}

public function user()
{
    return $this->belongsTo(User::class, 'users_id');
}

public function apples()
{
    return $this->belongsToMany(Apple::class, 'bookings', 'woman_id', 'apple_id');
}


}
