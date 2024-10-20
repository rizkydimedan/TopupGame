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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('game_id')->nullable()->constrained('topupgame_packages');
            $table->foreignId('diamond_id')->nullable()->constrained('diamonds');
            $table->foreignId('diamond_event')->nullable()->constrained('events');
            // $table->string('payment_method', 50);
            $table->decimal('total_amount', 10, 2);
            $table->decimal('price',15, 0)->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};