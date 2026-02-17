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
        Schema::table('category', function (Blueprint $table) {
              $table->string('extra1')->nullable()->change();
              $table->string('extra2')->nullable()->change();
              $table->string('extra3')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('category', function (Blueprint $table) {
            $table->string('extra1')->nullable(false)->change();
            $table->string('extra2')->nullable(false)->change();
            $table->string('extra3')->nullable(false)->change();
        });
    }
};
