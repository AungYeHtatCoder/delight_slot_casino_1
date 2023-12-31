<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransferLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'from_user_id',
        'to_user_id',
        'cash_in',
        'cash_out',
        'p_code',
        'cash_balance',
        'refrence_id',
        'status',
        'note',
    ];
    protected $dates = ['created_at', 'updated_at'];
    

    /**
     * Get the user who initiated the transfer.
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    /**
     * Get the user who received the transfer.
     *
     * @return BelongsTo
     */
    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }
}