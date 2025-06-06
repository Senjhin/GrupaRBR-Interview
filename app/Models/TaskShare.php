<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TaskShare extends Model
{

    protected $fillable = [
        'task_id',
        'token',
        'expires_at',
    ];

    protected $dates = ['expires_at'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
