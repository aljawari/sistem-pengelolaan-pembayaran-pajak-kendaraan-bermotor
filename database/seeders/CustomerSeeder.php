<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CustomerSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk tabel customers.
     */
    public function run(): void
    {
        // Generate 10 data dummy menggunakan factory
        Customer::factory()->count(10)->create();
    }
}
