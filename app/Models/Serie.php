<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Serie extends Model
{
    use HasFactory;
    protected $with = ['temporadas'];

    protected $fillable = [
        'nome'
    ];

    public function temporadas(): HasMany
    {
        return $this->hasMany(Season::class, 'series_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('order', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome');
        });
    }
}
