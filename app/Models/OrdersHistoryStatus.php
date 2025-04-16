<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrdersHistoryStatus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'orders_history_status';
    protected $fillable = [
        'order_id',
        'status',
        'changed_at',
    ];

    /**
     * Get the order that owns the order history status.
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}