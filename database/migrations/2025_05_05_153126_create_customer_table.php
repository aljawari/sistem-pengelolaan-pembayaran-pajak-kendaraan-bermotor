<?php

use Database\Seeders\CustomerSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->text('address');
            $table->timestamps();
        });
        $this->callSeeder();

    
    }
    private function callSeeder(): void
    {
        // jalankan seeder secara manual
        (new CustomerSeeder)->run();

    }
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
