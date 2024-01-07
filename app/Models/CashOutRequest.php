<?php

namespace App\Models;

use App\Models\Admin\Provider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashOutRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_method', 'amount', 'phone', 'user_id', 'status', 'provider_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function provider(){
        return $this->belongsTo(Provider::class);
    }
}
