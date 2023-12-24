<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameType extends Model
{
    use HasFactory;

    protected $fillable =['name','description'];


    public function providers()
    {
        return $this->belongsToMany(Provider::class)->withPivot('image');
    }

}
