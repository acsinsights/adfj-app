<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Videocat extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'link',
        'type',
        'videocover',       
    ];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
