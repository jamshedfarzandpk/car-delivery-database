<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CarDelivery extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "car_model_id", "state_id"];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function deliveryLocation(): HasOne
    {
        return $this->hasOne(State::class);
    }

    public function carModel(): HasOne
    {
        return $this->hasOne(CarModel::class);
    }
}
