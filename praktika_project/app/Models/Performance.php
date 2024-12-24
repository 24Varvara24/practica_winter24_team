<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'annotation',
        'begin',
        'duration',
        'image_small',
        'image_big',
        'price',
        'date'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
