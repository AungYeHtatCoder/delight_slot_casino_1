<?php

namespace App\Models\User;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
     protected $fillable = [
        'name',
        'profile',
        'email',
        'password',
        'profile',
        'phone',
        'address',
        'kpay_no',
        'cbpay_no',
        'wavepay_no',
        'ayapay_no',
        'balance',
        'admin_id',

    ];
    protected $dates = ['created_at', 'updated_at'];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // Other users that this user (a master) has created (agents)
    public function createdAdmin()
    {
        return $this->hasMany(Admin::class, 'admin_id');
    }
    public function createdAgents()
    {
        return $this->hasMany(Admin::class, 'admin_id');
    }

    // The master that created this user (an agent)
    public function createdByMaster()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}