<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apple extends Model
{
    use HasFactory;
    protected $fillable=['code','name','location','address','coordinates','municipalities_id'];
    protected $table='apples';

    public function municipalities(){
        return $this->hasMany(Municipality::class,'municipalities_id');
    }
}
