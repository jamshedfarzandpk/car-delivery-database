<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ["title", "value"];


    public function location(): HasOne
    {
        return $this->hasOne(State::class);
    }

    /**
     * Get all of the Models for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carModels(): HasMany
    {
        return $this->hasMany(CarModel::class);
    }
}
