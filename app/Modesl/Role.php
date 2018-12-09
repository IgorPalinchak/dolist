<?php

namespace App\Modesl;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\User;

class Role extends Model
{
    protected $fillable = ['name', 'alias'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users() : HasMany
    {
        return $this->hasMany(User::class);
    }
}
