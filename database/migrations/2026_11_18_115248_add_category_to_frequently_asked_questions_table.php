<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('frequently_asked_questions', function (Blueprint $table) {
            $table->string('category', 32)->default('gameplay');
        });

        DB::table('frequently_asked_questions')
            ->whereIn('id', [
                2, 3, 4, 26, 33, 34, 35, 36, 37, 38, 39, 40, 41
            ])
            ->update(['category' => 'getting-started']);

        DB::table('frequently_asked_questions')
            ->whereIn('id', [
                1, 5, 9, 10, 16, 17, 18, 21, 25, 29, 30, 31, 32
            ])
            ->update(['category' => 'support']);
    }

    public function down(): void
    {
        Schema::table('frequently_asked_questions', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
};