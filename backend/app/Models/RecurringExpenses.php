<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecurringExpenses extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'amount',
        'mark_as_paid',
        'accumulate',
        'duplicate_every_month',
        'user_id',
        'category_id'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }
}
