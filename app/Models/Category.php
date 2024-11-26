<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name', 'category_type'];

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    public function doas(): HasMany
    {
        return $this->hasMany(Doa::class);
    }

    public function hadists(): HasMany
    {
        return $this->hasMany(Hadist::class);
    }
}
