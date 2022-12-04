<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Industry extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'industries';

    protected $fillable = [
        'name',
    ];

    public function jobOpening()
    {
        return $this->hasMany(JobOpening::class);
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
