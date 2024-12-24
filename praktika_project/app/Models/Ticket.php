<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Dictionaries\TicketStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    protected $fillable = [
        'user_id',
        'row',
        'seat',
        'performance_id',
        'status_id'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
        // ->withPivot('')

    }
    public function performance(): BelongsTo
    {
        return $this->belongsTo(Performance::class, 'performance_id');
        // ->withPivot('ticket');
    }
    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn() => TicketStatus::status($this->status_id),
        );
    }

}
