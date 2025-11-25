<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Department extends Model
{
    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

        public function head_of_department(): HasOne
    {
        return $this->HasOne(User::class);
    }
}
