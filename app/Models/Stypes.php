<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stypes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'stype_name',
        'slug',
        'pservices_id',
    ];

    public function pservices()
    {
        return $this->belongsTo(Pservices::class, 'pservices_id', 'id');
    }
}
