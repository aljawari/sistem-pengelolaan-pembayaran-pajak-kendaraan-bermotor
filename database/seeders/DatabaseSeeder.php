<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan semua seeder utama.
     */
    public function run(): void
    {
        $this->call([
            CustomerSeeder::class,
        ]);
        
    }
}
