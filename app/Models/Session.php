<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'chama_id',
        'location',
        'payload',
        'ip_address',
        'user_agent',
        'last_activity',
        'last_seen',
        'chama_id'
    ];

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function chama():BelongsTo{
        return $this->belongsTo(Chama::class);
    }
}
