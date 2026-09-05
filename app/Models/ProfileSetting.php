<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_image',
        'hero_position_x',
        'hero_position_y',
        'hero_rotation',
        'about_image',
        'about_position_x',
        'about_position_y',
        'about_rotation',
    ];

    protected $casts = [
        'hero_position_x' => 'integer',
        'hero_position_y' => 'integer',
        'hero_rotation' => 'integer',

        'about_position_x' => 'integer',
        'about_position_y' => 'integer',
        'about_rotation' => 'integer',
    ];
}
