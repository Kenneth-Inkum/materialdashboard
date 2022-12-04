<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{
    use HasFactory;

    protected $table = 'job_titles';

    protected $fillable = [
        'name',
        'description'
    ];

    public function jobApplication()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function jobOpening()
    {
        return $this->hasMany(JobOpening::class);
    }

    public function recruit()
    {
        return $this->hasMany(Recruit::class);
    }

}
