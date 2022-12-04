<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobOpening extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'job_openings';

    protected $fillable = [
        'company_id',
        'job_title_id',
        'industry_id',
        'type',
        'mode',
        'description',
        'duty',
        'location',
        'required_skill',
        'activity',
        'challenge',
        'experience',
        'minsalary',
        'maxsalary',
        'closing_date',
    ];

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
