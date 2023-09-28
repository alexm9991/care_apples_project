<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable=[
        'code','name','description',
        'service_categories_id'];
    protected $table='services';

      // Definir la relación "muchos a uno" con Service_Category
      public function category()
      {
          return $this->belongsTo('App\Models\Service_Category'::class, 'id');
      }

      public function establishments()
      {
          return $this->belongsToMany(Establishment::class, 'services_establishments', 'services_id', 'establishments_id');
      } 

}
