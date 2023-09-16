<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'offername',
        'offerimage',
        'date',
        'created_at',
];


public function images()
{
    return $this->hasMany(Image::class);
}
}
