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
        // Create Admin user
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => "Password1",
        ]);

        // Additional Seed Users
        $seedUsers = [
            [
                'name' => 'Adrian Gould',
                'email' => 'adrian.gould@example.com',
                'password' => "Password1",
            ],
            [
                'name' => 'Ivanna Vinn',
                'email' => 'ivanna.vinn@example.com',
            ],
            [
                'name' => 'Russ Round',
                'email' => 'russ.hin-around@example.com',
            ],
            [
                'name' => 'Chip Buttie',
                'email' => 'chip.buttie@example.com',
            ],
            [
                'name' => 'Annie Wun',
                'email' => 'annie.wun@example.com',
            ],
            [
                'name' => 'Andy Mann',
                'email' => 'andy.mann@example.com',
            ],
            [
                "name" => "April Schauer",
                "email" => "April.Schauer@example.com",
            ],
            [
                "name" => "Al K. Seltzer",
                "email" => "Al.K.Seltzer@example.com",
            ],
            [
                "name" => "Dee Sember",
                "email" => "Dee.Sember@example.com",
            ],
            [
                "name" => "Jo Kerr",
                "email" => "Jo.Kerr@example.com",
            ],
            [
                "name" => "Izzy Kidding",
                "email" => "Izzy.Kidding@example.com",
            ],
        ];

        foreach ($seedUsers as $seedUser) {
            $newUser = User::factory()->create($seedUser);
            // If required you may then work with $newUser to do things such as add roles
        }

        // Add ten more users using a factory
        // User::factory(10)->create();

    }
}
