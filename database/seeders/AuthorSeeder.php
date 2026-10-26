<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['name' => 'Tere Liye', 'country' => 'Indonesia'],
            ['name' => 'J.K. Rowling', 'country' => 'Inggris'],
            ['name' => 'Andrea Hirata', 'country' => 'Indonesia'],
            ['name' => 'Stephen King', 'country' => 'Amerika Serikat'],
            ['name' => 'Raditya Dika', 'country' => 'Indonesia'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}