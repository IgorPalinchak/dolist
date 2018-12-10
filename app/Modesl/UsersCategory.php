<?php

namespace App\Modesl;

use App\User;
use App\UserTask;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UsersCategory extends Model
{
    protected $fillable = ['name', 'user_id'];
    public $timestamps = false;
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users() : HasMany
    {
        return $this->hasMany(User::class);
    }


    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany
     */
    public function usersTasks(): HasMany
    {
        return $this->hasMany(UsersTask::class);
    }
}
