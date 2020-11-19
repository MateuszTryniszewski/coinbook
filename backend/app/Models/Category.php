<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'icon',
        'color',
    ], $hidden = [
        'created_at',
        'updated_at'
    ];

    public function profit()
    {
        return $this->hasMany(Profit::class);
    }
}
