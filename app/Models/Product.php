<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'imagedata',
        'status',
    ];

    protected $casts = [
        'imagedata' => 'string'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
