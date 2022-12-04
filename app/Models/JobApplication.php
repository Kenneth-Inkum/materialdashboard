<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobApplication extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'job_applications';

    protected $fillable = [
        'job_opening_id',
        'job_title_id',
        'recruit_id',
    ];

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }

    public function jobOpening()
    {
        return $this->belongsTo(JobOpening::class);
    }

    public function recruit()
    {
        return $this->belongsTo(Recruit::class);
    }
}
