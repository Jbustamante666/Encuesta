<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function most_beloved()
    {
        return $this->hasOne(Survey::class, 'most_beloved_rrss', 'id');
    }

    public function least_favorite()
    {
        return $this->hasOne(Survey::class, 'least_favorite_rrss', 'id');
    }
}
