<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chama extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'location',
        'description',
        'monthly_savings',
        'meeting_frequency',
        'available_loans',
        'loan_interest', 
        'bank_account',
        'bank_balance',
        'member_count', 
        'manager'
    ]; 

    public function members():HasMany{
        return $this->hasMany(Member::class);
    }
}
