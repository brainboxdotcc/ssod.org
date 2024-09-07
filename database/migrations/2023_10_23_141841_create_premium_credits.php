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
        Schema::create('premium_credits', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id");
            $table->string("subscription_id");
            $table->unique(["user_id", "subscription_id"]);
            $table->foreign("user_id")->on("users")->references("id");
            $table->boolean("active")->default(true);
            $table->dateTime("since");
            $table->string("plan_id");
            $table->foreign("plan_id")->on("premium_plans")->references("id");
            $table->dateTime("cancel_date")->nullable();
            $table->dateTime("manual_expiry_date")->nullable();
            $table->boolean("payment_failed")->default(false);
            $table->dateTime("payment_failed_date")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('premium_credits');
    }
};
