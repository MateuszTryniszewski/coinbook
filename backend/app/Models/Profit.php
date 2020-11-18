<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profit extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
        ,'subtitle',
        'amount',
        'user_id'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
