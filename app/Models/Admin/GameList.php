<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameList extends Model
{
    use HasFactory;
    protected $fillable = [
        'game_id',
        'name_en',
        'name_mm',
        'image',
        'game_type_id',
        'provider_id',
        'click_count'
    ];
}
