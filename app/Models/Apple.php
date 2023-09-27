<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apple extends Model
{
    use HasFactory;
    protected $fillable=[
        'code','name','location','address','latitude',
        'length','municipalities_id'
    ];

    protected $table='apples';

    public function municipalities(){
        return $this->hasMany('App\Models\Municipality', 'id');
    }

    public function women()
{
    return $this->belongsToMany(Woman::class, 'bookings', 'apple_id', 'woman_id');
}


}
