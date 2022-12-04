<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            ['location_name' => 'Goaso', 'country_id' => 84, 'state_id' => 1],
            ['location_name' => 'Kumasi', 'country_id' => 84, 'state_id' => 2],
            ['location_name' => 'Sunyani', 'country_id' => 84, 'state_id' => 3],
            ['location_name' => 'Techiman', 'country_id' => 84, 'state_id' => 4],
            ['location_name' => 'Cape Coast', 'country_id' => 84, 'state_id' => 5],
            ['location_name' => 'Koforidua', 'country_id' => 84, 'state_id' => 6],
            ['location_name' => 'Accra', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Tema', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Madina', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'East Legon', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Cantonment', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Teshie', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Osu', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Dansoman', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Adjiringano', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Adenta', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Kaneshie', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Lapaz', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Pokuase', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Amasaman', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Ablekuma', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Odokor', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Adabraka', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Labone', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Lashibi', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Ashaiman', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Nungua', 'country_id' => 84, 'state_id' => 7],
            ['location_name' => 'Nalerigu', 'country_id' => 84, 'state_id' => 8],
            ['location_name' => 'Tamale', 'country_id' => 84, 'state_id' => 9],
            ['location_name' => 'Dambai', 'country_id' => 84, 'state_id' => 10],
            ['location_name' => 'Damongo', 'country_id' => 84, 'state_id' => 11],
            ['location_name' => 'Bolgatanga', 'country_id' => 84, 'state_id' => 12],
            ['location_name' => 'Wa', 'country_id' => 84, 'state_id' => 13],
            ['location_name' => 'Ho', 'country_id' => 84, 'state_id' => 14],
            ['location_name' => 'Takoradi', 'country_id' => 84, 'state_id' => 15],
            ['location_name' => 'Wiawoso', 'country_id' => 84, 'state_id' => 16],

            ['location_name' => 'Umuahia', 'country_id' => 162, 'state_id' => 17],
            ['location_name' => 'Yola', 'country_id' => 162, 'state_id' => 18],
            ['location_name' => 'Uyo', 'country_id' => 162, 'state_id' => 19],
            ['location_name' => 'Awka', 'country_id' => 162, 'state_id' => 20],
            ['location_name' => 'Bauchi', 'country_id' => 162, 'state_id' => 21],
            ['location_name' => 'Yenagoa', 'country_id' => 162, 'state_id' => 22],
            ['location_name' => 'Makurdi', 'country_id' => 162, 'state_id' => 23],
            ['location_name' => 'Maiduguri', 'country_id' => 162, 'state_id' => 24],
            ['location_name' => 'Calabar', 'country_id' => 162, 'state_id' => 25],
            ['location_name' => 'Asaba', 'country_id' => 162, 'state_id' => 26],
            ['location_name' => 'Abakaliki', 'country_id' => 162, 'state_id' => 27],
            ['location_name' => 'Benin City', 'country_id' => 162, 'state_id' => 28],
            ['location_name' => 'Ado Ekiti', 'country_id' => 162, 'state_id' => 29],
            ['location_name' => 'Enugu', 'country_id' => 162, 'state_id' => 30],
            ['location_name' => 'Gombe', 'country_id' => 162, 'state_id' => 31],
            ['location_name' => 'Owerri', 'country_id' => 162, 'state_id' => 32],
            ['location_name' => 'Dutse', 'country_id' => 162, 'state_id' => 33],
            ['location_name' => 'Kaduna', 'country_id' => 162, 'state_id' => 34],
            ['location_name' => 'Kano', 'country_id' => 162, 'state_id' => 35],
            ['location_name' => 'Katsina', 'country_id' => 162, 'state_id' => 36],
            ['location_name' => 'Birnin Kebbi', 'country_id' => 162, 'state_id' => 37],
            ['location_name' => 'Lokoja', 'country_id' => 162, 'state_id' => 38],
            ['location_name' => 'Ilorin', 'country_id' => 162, 'state_id' => 39],
            ['location_name' => 'Ikeja', 'country_id' => 162, 'state_id' => 40],
            ['location_name' => 'Lafia', 'country_id' => 162, 'state_id' => 41],
            ['location_name' => 'Minna', 'country_id' => 162, 'state_id' => 42],
            ['location_name' => 'Abeokuta', 'country_id' => 162, 'state_id' => 43],
            ['location_name' => 'Akure', 'country_id' => 162, 'state_id' => 44],
            ['location_name' => 'Oshogbo', 'country_id' => 162, 'state_id' => 45],
            ['location_name' => 'Ibadan', 'country_id' => 162, 'state_id' => 46],
            ['location_name' => 'Jos', 'country_id' => 162, 'state_id' => 47],
            ['location_name' => 'Port Harcourt', 'country_id' => 162, 'state_id' => 48],
            ['location_name' => 'Sokoto', 'country_id' => 162, 'state_id' => 49],
            ['location_name' => 'Jalingo', 'country_id' => 162, 'state_id' => 50],
            ['location_name' => 'Damaturu', 'country_id' => 162, 'state_id' => 51],
            ['location_name' => 'Gusau', 'country_id' => 162, 'state_id' => 52],

        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
