<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CarModel extends Model
{
    use HasFactory;
    protected $fillable = ["title", "value", "car_id", "state_id"];

    public function car(): HasOne
    {
        return $this->hasOne(Car::class);
    }

    public function location(): HasOne
    {
        return $this->hasOne(State::class);
    }
}
