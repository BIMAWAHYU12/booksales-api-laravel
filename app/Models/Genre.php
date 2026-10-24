<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Fiksi', 'description' => 'Buku yang berisi cerita rekaan atau imajinasi'],
            ['id' => 2, 'name' => 'Non-Fiksi', 'description' => 'Buku berdasarkan fakta dan kenyataan'],
            ['id' => 3, 'name' => 'Teknologi', 'description' => 'Buku seputar komputer, pemrograman, dan IT'],
            ['id' => 4, 'name' => 'Sejarah', 'description' => 'Buku mengenai peristiwa dan catatan masa lalu'],
            ['id' => 5, 'name' => 'Bisnis & Keuangan', 'description' => 'Buku tentang strategi bisnis dan manajemen finansial'],
        ];
    }
}