<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'name',
        'phone_number',
        'id_number',
        'outstanding_balance',
    ];

    public function unit()
    {
        return $this->belongsTo(Property::class, 'unit_id'); // assuming Property model is for units
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}