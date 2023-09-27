<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Type_Category extends Model
{
    use HasFactory;
    protected $fillable=['service_type_id','service_category_id'];
    protected $table='service_type_category';

    public function serviceType()
    {
        return $this->belongsTo(Service_Type::class, 'service_type_id');
    }

    public function serviceCategory()
    {
        return $this->belongsTo(Service_Category::class, 'service_category_id');
    }
}
