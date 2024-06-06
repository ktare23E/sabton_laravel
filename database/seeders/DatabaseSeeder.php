<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       
        // $this->call(TestSeeder::class); 
        $this->call([
            CountrySeeder::class,
            TestSeeder::class,
            ContactSeeder::class,
            PostSeeder::class,
            TagSeeder::class,
            CompanySeeder::class,
            PhoneNumberSeeder::class,
            JobSeeder::class,
        ]);

        User::factory(5)->create();


        //call the test seeder
    }
}
