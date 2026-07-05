<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'couple_name_1',
        'couple_name_2',
        'wedding_date',
        'venue',
        'total_budget',
    ];

    protected $casts = [
        'wedding_date' => 'date',
        'total_budget' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tables()
    {
        return $this->hasMany(Table::class);
    }

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }
}