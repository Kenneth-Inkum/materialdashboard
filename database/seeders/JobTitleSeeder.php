<?php

namespace Database\Seeders;

use App\Models\JobTitle;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobtitles = [
            ['name' => 'Software Engineer'],
            ['name' => 'Mobile Developer'],
            ['name' => 'iOS Developer'],
            ['name' => 'Android Developer'],
            ['name' => 'Frontend Engineer'],
            ['name' => 'Backend Engineer'],
            ['name' => 'Full-Stack Engineer'],
            ['name' => 'Software Achitect'],
            ['name' => 'Embedded Engineer'],
            ['name' => 'Data Engineer'],
            ['name' => 'Security Engineer'],
            ['name' => 'Machine Learning Engineer'],
            ['name' => 'Engineering Manager'],
            ['name' => 'QA Engineer'],
            ['name' => 'DevOps'],
            ['name' => 'Data Scientist'],
            ['name' => 'User Researcher'],
            ['name' => 'Visual Designer'],
            ['name' => 'Creative Director'],
            ['name' => 'Graphic Designer'],
            ['name' => 'Product Designer'],
            ['name' => 'Design Manager'],
            ['name' => 'Product Manager'],
            ['name' => 'Operations'],
            ['name' => 'Finance/Accounting'],
            ['name' => 'Human Resource'],
            ['name' => 'Office Manager'],
            ['name' => 'Recruiter'],
            ['name' => 'Customer Service'],
            ['name' => 'Operations Manager'],
            ['name' => 'Chief of Staff'],
            ['name' => 'Sales'],
            ['name' => 'Business Developer'],
            ['name' => 'Sales Development Representative'],
            ['name' => 'Account Executive'],
            ['name' => 'Business Development Manager'],
            ['name' => 'Account Manager'],
            ['name' => 'Sales Manager'],
            ['name' => 'Customer Success Manager'],
            ['name' => 'Marketing'],
            ['name' => 'Growth Hacker'],
            ['name' => 'Marketing Manager'],
            ['name' => 'Digital Marketing Manager'],
            ['name' => 'Content Creator'],
            ['name' => 'Product Marketing Manager'],
            ['name' => 'Social Media Manager'],
            ['name' => 'Copywriter'],
            ['name' => 'Management'],
            ['name' => 'CEO'],
            ['name' => 'CFO'],
            ['name' => 'CMO'],
            ['name' => 'COO'],
            ['name' => 'CTO'],
            ['name' => 'Other Engineering'],
            ['name' => 'Hardware Engineer'],
            ['name' => 'Mechanical Engineer'],
            ['name' => 'Systems Engineer'],
            ['name' => 'Other'],
            ['name' => 'Business Analyst'],
            ['name' => 'Project Manager'],
            ['name' => 'Attorney'],
            ['name' => 'Data Analyst'],
        ];

        foreach ($jobtitles as $jobtitle) {
            JobTitle::create($jobtitle);
        }

    }
}
