<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Musiccat extends Model
{
        use HasFactory;
        protected $fillable=[
            'id',
            'link',
        'music-cover',


    ];
        public function images(){
            return $this->hasMany(Image::class);
        }
    }
