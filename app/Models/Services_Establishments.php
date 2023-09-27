<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_Establishments extends Model
{
    use HasFactory;
    protected $fillable=['establishments_id','services_id'];
    protected $table='services_establishments';

    public function establishment()
    {
        return $this->belongsTo(Establishment::class, 'establishments_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'services_id');
    }
}
