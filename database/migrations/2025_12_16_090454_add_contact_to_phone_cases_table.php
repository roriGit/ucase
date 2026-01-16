<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('phone_cases', function (Blueprint $table) {
            $table->string('contact')->nullable()->after('lastname'); // store image path/url
        });
    }

    public function down(): void
    {
        Schema::table('phone_cases', function (Blueprint $table) {
            $table->dropColumn('contact');
        });
    }
};
