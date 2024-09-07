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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable()->after('email');
            $table->string('global_name')->nullable()->after('username');
            $table->string('avatar')->nullable()->after('username');
            $table->string('locale')->nullable()->after('username');
            $table->string('discriminator')->nullable()->after('username');
            $table->boolean('verified')->nullable()->after('username');
            $table->boolean('mfa_enabled')->nullable()->after('username');
            $table->string('banner')->nullable()->after('verified');
            $table->string('banner_color')->nullable()->after('banner');
            $table->string('accent_color')->nullable()->after('banner_color');
            $table->string('premium_type')->nullable()->after('mfa_enabled');
            $table->string('public_flags')->nullable()->after('premium_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('avatar');
            $table->dropColumn('locale');
            $table->dropColumn('global_name');
            $table->dropColumn('discriminator');
            $table->dropColumn('mfa_enabled');
            $table->dropColumn('banner');
            $table->dropColumn('banner_color');
            $table->dropColumn('accent_color');
            $table->dropColumn('premium_type');
            $table->dropColumn('public_flags');
            $table->dropColumn('verified');
        });
    }
};
