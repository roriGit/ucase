<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('phone_cases', function (Blueprint $table) {
            $table->id();

            // Foreign key to phones
            $table->foreignId('phone_id')
                  ->constrained('phones')
                  ->onDelete('cascade'); // delete cases if phone is deleted

            $table->string('case_image')->nullable(); // path to case image

            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('email')->nullable();
            $table->text('delivery_address')->nullable();

            $table->boolean('contact_made')->default(false); // yes/no

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('phone_cases');
    }
};
