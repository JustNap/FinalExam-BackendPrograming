<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_user_id',
        'to_user_id',
        'amount',
        // tambahkan kolom lain yang relevan
    ];

    // Relasi ke model User, untuk fromUser
    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    // Relasi ke model User, untuk toUser
    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }
}
