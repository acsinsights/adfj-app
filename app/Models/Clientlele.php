<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Clientlele extends Model
{
    use HasFactory;
    protected $fillable = [
            'clientname',
            'clientimg',
            'date',
            'created_at',
    ];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
