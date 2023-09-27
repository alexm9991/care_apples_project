<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;
    protected $fillable=['code','name','manager','address'];
    protected $table='establishments';

    public function services()
    {
        return $this->belongsToMany(Service::class, 'services_establishments', 'establishments_id', 'services_id');
    }
}
