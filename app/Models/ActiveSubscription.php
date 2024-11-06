<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use phpDocumentor\Reflection\Types\Boolean;

class ActiveSubscription extends Model
{
    protected $fillable = [
        'user_id',
        'subscription_id',
        'start_date',
        'end_date',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }
}
