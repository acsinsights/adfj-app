<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'company_name',
        'service',
        'reference',
        'attach_file',
        'consultation',
        'form_type',
    ];

    public function scopeContact($query)
    {
        $query->where('form_type', 'contact');
    }

    public function scopeConsultation($query)
    {
        $query->where('form_type', 'consultation');
    }
}
