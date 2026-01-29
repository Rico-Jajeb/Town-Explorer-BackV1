<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('city_model', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('city_name');
            $table->string('description');
            $table->decimal('longitude', 10, 7);
            $table->decimal('latitude', 10, 7);
            $table->string('extra1');
            $table->string('extra2');
            $table->string('extra3');
            $table->string('extra4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city_model');
    }
};
