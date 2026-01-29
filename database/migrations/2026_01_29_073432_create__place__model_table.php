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
        Schema::create('place_model', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('city_id');
            $table->string('place_name');
            $table->string('description');
            $table->decimal('latitude', 10, 7);
            $table->string('longitude', 10, 7);
            $table->integer('price_level');
            $table->integer('avg_cost_estimate');
            $table->time('open_time');
            $table->time('close_time');
            $table->string('category');
            $table->integer('rating');
            $table->integer('visit_duration')->nullable();
            $table->string('facebook')->nullable();
            $table->string('email')->nullable();
            $table->integer('number')->nullable();
            $table->string('other_contact')->nullable();
            $table->string('extra1')->nullable();
            $table->string('extra2')->nullable();
            $table->string('extra3')->nullable();
            $table->string('extra4')->nullable();
            $table->string('extra5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place_model');
    }
};
