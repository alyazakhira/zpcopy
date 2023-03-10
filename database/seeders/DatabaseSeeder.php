<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Alya Zakhira',
            'email' => 'zakhiralya@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'name' => 'Sky Zonhori',
            'email' => 'sky.zonhori@gmail.com',
            'password' => Hash::make('galaxsky')
        ]);

        $this->call([
            ArticleSeeder::class,
            ProductSeeder::class,
            CarouselHeaderSeeder::class,
            SubscriberSeeder::class,
        ]);
    }
}
