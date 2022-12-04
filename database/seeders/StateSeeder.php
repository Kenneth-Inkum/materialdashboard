<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            ['name' => 'Ahafo', 'zipcode' => '00233','country_id' => 84],
            ['name' => 'Ashanti', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Bono', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Bono East', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Central', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Eastern', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Greater Accra', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'North East', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Northern', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Oti', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Savannah', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Upper East', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Upper West', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Volta', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Western', 'zipcode' => '00233', 'country_id' => 84],
            ['name' => 'Western North', 'zipcode' => '00233', 'country_id' => 84],

            ['name' => 'Abia', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Adamawa', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Akwa Ibom', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Anambra', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Bauchi', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Bayelsa', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Benue', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Borno', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Cross River', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Delta', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Ebonyi', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Edo', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Ekiti', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Enugu', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Gombe', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Imo', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Jigawa', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Kaduna', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Kano', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Katsina', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Kebbi', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Kogi', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Kwara', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Lagos', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Nasarawa', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Niger', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Ogun', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Ondo', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Osun', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Oyo', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Plateau', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Rivers', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Sokoto', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Taraba', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Yobe', 'zipcode' => '00234', 'country_id' => 162],
            ['name' => 'Zamfara', 'zipcode' => '00234', 'country_id' => 162],
        ];

        foreach ($regions as $region) {
            State::create($region);
        }

    }
}
