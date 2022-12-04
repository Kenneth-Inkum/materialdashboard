<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recruit extends Model
{
    use HasFactory, SoftDeletes;

    protected $table ='recruits';

    protected $fillable = [
        'firstname',
        'lastname',
        'othername',
        'dob',
        'gender',
        'phonenumber',
        'location',
        'country_id',
        'state_id',
        'education_level',
        'course_studied',
        'about_me',
        'experience',
        'interest',
        'achievement',
        'expectedsalary',
        'resume',
        'certificate',
        'job_title_id',
        'industry_id',
        'user_id',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
