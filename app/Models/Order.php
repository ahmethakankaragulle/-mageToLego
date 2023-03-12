<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "order";

    protected $fillable = [
        'user_id',
        'price',
        'name',
        'phone',
        'address',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
