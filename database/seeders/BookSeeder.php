<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Hafalan Shalat Delisa', 'author_id' => 1, 'year' => 2005, 'price' => 75000],
            ['title' => 'Harry Potter and the Sorcerer\'s Stone', 'author_id' => 2, 'year' => 1997, 'price' => 150000],
            ['title' => 'Laskar Pelangi', 'author_id' => 3, 'year' => 2005, 'price' => 85000],
            ['title' => 'The Shining', 'author_id' => 4, 'year' => 1977, 'price' => 120000],
            ['title' => 'Kambing Jantan', 'author_id' => 5, 'year' => 2005, 'price' => 60000],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}