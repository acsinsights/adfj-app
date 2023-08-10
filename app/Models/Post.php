<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'location',
        'date',
        'media',
        'serviceid',
        'stypeid',
        'status',
        'hypelinks',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function pservices()
    {
        return $this->belongsTo(Pservices::class, 'serviceid', 'id');
    }

    public function stypes()
    {
        return $this->belongsTo(Stypes::class, 'stypeid', 'id');
    }
}
