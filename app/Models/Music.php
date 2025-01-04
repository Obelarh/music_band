<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    /** @use HasFactory<\Database\Factories\MusicFactory> */
    use HasFactory;

    protected $fillable = [
        'name_of_music',
        'user_id',
        'name_of_artist',
        'music_released_date',
        'type_of_music',
        'music_file',

    ];
}
