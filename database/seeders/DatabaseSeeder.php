<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'ali admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' =>Hash::make('123'),
        ]);
        User::factory()->create([
            'name' => 'Ali manger',
            'role' => 'manger',
            'email' => 'manger@gmail.com',
            'password' =>Hash::make('123'),
        ]);
        User::factory()->create([
            'name' => 'Ali employee',
            'role' => 'employee',
            'email' => 'employee@gmail.com',
            'password' =>Hash::make('123'),
        ]);
        User::factory()->create([
            'name' => 'Ali user',
            'role' => 'user',
            'email' => 'user@gmail.com',
            'password' =>Hash::make('123'),
        ]);

        $this->call([
            CustomersTableSeeder::class,
        ]);


    }
}
