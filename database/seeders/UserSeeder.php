<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedUsers = [
            [
                "name" => "Admin",
                "email" => "admin@example.com",
                "password" => "Password1",
                "email_verified_at" => now(), // Do not require Admin to be verified before use
            ],

            // add additional users here as needed:
            // [
            //     "name" => "The Name Here",
            //     "email" => "TheEmailAddress@here.example.com",
            //     "password" => "SomePasswordFortesting",
            //     "email_verified_at" => now(), // Optional line
            // ],

        ];

        foreach ($seedUsers as $seedUser) {
            $seedUser['password'] = Hash::make($seedUser['password']);

            $newUser = User::create($seedUser);
        }

        // Add a test user using a factory but defining the name and email
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Add ten more users using a factory
        // User::factory(10)->create();

    }
}
