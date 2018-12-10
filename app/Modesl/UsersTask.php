<?php

namespace App\Modesl;

use Illuminate\Database\Eloquent\Model;

class UsersTask extends Model
{
    protected $fillable = ['name', 'users_category_id', 'user_id'];

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
    public function categories(): BelongsTo
    {
        return $this->belongsTo(UsersCategory::class);
    }
}
