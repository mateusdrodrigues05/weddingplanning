<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companion extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'name',
        'age',
    ];

    protected $casts = [
        'age' => 'integer',
    ];

    /**
     * The guest this companion belongs to.
     */
    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    protected $appends = ['is_adult'];

    public function getIsAdultAttribute()
    {
        return is_null($this->age) || $this->age >= 18;
    }
}