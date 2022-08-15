<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'age',
        'gender',
        't_facebook',
        't_whatsapp',
        't_twitter',
        't_instagram',
        't_tiktok',
        'most_beloved_rrss',
        'least_favorite_rrss',
    ];
}
