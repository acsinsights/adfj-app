<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'custname',
        'custreview',
        'custimg',
        'custstar',
        'created_at',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
