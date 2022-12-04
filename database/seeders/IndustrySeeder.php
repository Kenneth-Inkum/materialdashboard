<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries = [
            ['name' => 'Software Engineering'],
            ['name' => 'Mobile App Development'],
            ['name' => 'Desktop App Development'],
            ['name' => 'AgriTech'],
            ['name' => 'FinTech'],
            ['name' => 'EduTech'],
            ['name' => 'Innovation Hub'],
            ['name' => 'Co-Space Sharing'],
            ['name' => 'Digital Marketing'],
            ['name' => 'Marketing'],
            ['name' => 'Automation'],
            ['name' => 'Accounting'],
            ['name' => 'Sales'],
            ['name' => 'Creative Arts'],
            ['name' => 'System Architecture'],
            ['name' => 'Healthcare'],
            ['name' => 'Applied Services'],
            ['name' => 'Construstion'],
            ['name' => 'Tourism'],
            ['name' => 'Capacity Building'],
            ['name' => 'Human Resources'],
            ['name' => 'Data Science'],
            ['name' => 'Machine Learning'],
            ['name' => 'Artificial Intelligence'],
            ['name' => 'Hospitality'],
            ['name' => 'Information Security'],
            ['name' => 'Security'],
            ['name' => 'Mechanical Engineering'],
            ['name' => 'Other'],
            ['name' => 'UI/UX Design'],
            ['name' => 'Project Management'],
        ];
        foreach ($industries as $industry) {
            Industry::create($industry);
        }

    }
}
