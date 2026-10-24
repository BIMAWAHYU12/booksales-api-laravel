<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Tere Liye', 'country' => 'Indonesia'],
            ['id' => 2, 'name' => 'J.K. Rowling', 'country' => 'Inggris'],
            ['id' => 3, 'name' => 'Andrea Hirata', 'country' => 'Indonesia'],
            ['id' => 4, 'name' => 'Stephen King', 'country' => 'Amerika Serikat'],
            ['id' => 5, 'name' => 'Raditya Dika', 'country' => 'Indonesia'],
        ];
    }
}