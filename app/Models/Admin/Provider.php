<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = ['p_code','description'];


    public function gameTypes()
    {
        return $this->belongsToMany(GameType::class)->withPivot('image');
    }

}
