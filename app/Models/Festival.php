<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'festival_type_id',
        'address',
        'manager',
        'phone',
        'start',
        'end',
        'city_id'
    ];

    protected $with = ['city', 'type'];

    public function type()
    {
        return $this->belongsTo(FestivalType::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
