<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static insert([] $array)
 * @method static whereNotIn(string $string, int[] $array)
 */
class Role extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function users(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class);
    }
}
