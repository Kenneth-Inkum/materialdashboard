<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    protected $fillable = [
        'name',
        'code',
    ];

    public function state()
    {
        return $this->hasMany(State::class);
    }

    public function recruit()
    {
        return $this->hasMany(Recruit::class);
    }

    public function company()
    {
        return $this->hasMany(Company::class);
    }
}
