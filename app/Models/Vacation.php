<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vacation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
        'vacation_status',
    ];

    protected $casts = [
        'approved' => 'boolean',
    ];

    /**
     * @return BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function canBeEdited(): bool
    {
        return $this->vacation_status !== 'approved' && $this->vacation_status !== 'rejected';
    }
}
