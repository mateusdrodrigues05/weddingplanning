<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'wedding_id',
        'table_id',
        'name',
        'email',
        'phone',
        'rsvp_token',
        'rsvp_status',
        'companions_count',
        'dietary_restrictions',
        'notes',
    ];

    protected $casts = [
        'companions_count' => 'integer',
    ];

    public function wedding()
    {
        return $this->belongsTo(Wedding::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}