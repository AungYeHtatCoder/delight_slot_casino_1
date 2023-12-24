<?php

namespace App\Models;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GameType extends Model
{
    use HasFactory;

    protected $fillable =['name','description'];


    // public function providers()
    // {
    //     return $this->hasMany(Provider::class);
    // }

     public function providers()
    {
        return $this->belongsToMany(Provider::class, 'game_type_provider');
    }

}