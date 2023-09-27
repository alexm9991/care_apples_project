<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Category extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    protected $table='service__categories';

    public function types()
    {
        return $this->belongsToMany(Service_Types::class, 'service_type_category', 'service_category_id', 'service_type_id');
    }   
}
