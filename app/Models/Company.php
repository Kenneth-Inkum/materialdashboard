<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'companies';

    protected $fillable = [
        'name',
        'size',
        'industry_id',
        'state_id',
        'country_id',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function jobOpening()
    {
        return $this->hasMany(JobOpening::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
