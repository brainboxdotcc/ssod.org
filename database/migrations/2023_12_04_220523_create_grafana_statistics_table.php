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
        Schema::create('grafana_statistics', function (Blueprint $table) {
            $table->dateTime("date")->primary();
            $table->unsignedBigInteger("guilds")->nullable()->default(0);
            $table->unsignedBigInteger("users")->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grafana_statistics');
    }
};
