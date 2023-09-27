<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Type extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    protected $table='service__types';

    public function categories()
    {
        return $this->belongsToMany(Service_Categories::class, 'service_type_category', 'service_type_id', 'service_category_id');
    }
}
