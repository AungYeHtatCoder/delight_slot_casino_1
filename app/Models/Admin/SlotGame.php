<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlotGame extends Model
{
    use HasFactory;
    protected $fillable = [
        'game_id',
        'name_en',
        'name_mm',
        'image',
        'type',
        'providerCode'
    ];
}
