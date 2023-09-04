<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// import model statuses
use App\Models\Statuses;

class Tasks extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status_id',
        'user_id',
        'image_id',
    ];
    protected $table = 'tasks';
    use HasFactory;
    // belongs to method
    public function statuses(): BelongsTo
    {
        return $this->belongsTo(Statuses::class, 'status_id', 'id');
    }


    // public function images(): BelongsTo
    // {
    //     return $this->belongsTo(Images::class);
    // }

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }
}
