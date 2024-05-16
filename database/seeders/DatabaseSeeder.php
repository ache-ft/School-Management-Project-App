<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Book::create([
            // 'book_name'=>'ana',
            // 'subject'=>'ana',
            // 'writter_name'=>'ana',
            // 'Level'=>'ana',
            // 'publishing_date'=>'04/05/2024',
            // 'upload_date'=>'04/05/2024',
    
     
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
