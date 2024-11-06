<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transactions extends Model
{
    protected $fillable = [
        'balance_id',
        'type',
        'amount',
        'description',
    ];

    public function balance(): BelongsTo
    {
        return $this->belongsTo(Balance::class);
    }
}
