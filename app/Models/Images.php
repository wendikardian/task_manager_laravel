<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Images extends Model
{
    use HasFactory;
    // add has many function to create a relation
    public function member(): HasMany
    {
        return $this->hasMany(Tasks::class);
    }
}
