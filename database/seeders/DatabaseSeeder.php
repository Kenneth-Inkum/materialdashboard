<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(JobTitleSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(IndustrySeeder::class);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@material.com',
        //     'password' => ('secret')
        // ]);
    }
}
