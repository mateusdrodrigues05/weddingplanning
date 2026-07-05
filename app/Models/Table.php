<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $table = 'tables';

    protected $fillable = [
        'wedding_id',
        'name',
        'capacity',
    ];

    public function wedding()
    {
        return $this->belongsTo(Wedding::class);
    }

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }
}