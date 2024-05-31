<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'connection',
        'user_id',
        'chama_id',
        'user_role'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function chamas(): BelongsTo{
        return $this->belongsTo(Chama::class);
    }
}
