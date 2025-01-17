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
            $table->string('uuid')->unique();
            $table->string('invoice')->unique();
            $table->string('uid_game')->nullable();
            $table->string('server_game')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('game_id')->nullable()->constrained('topupgame_packages');
            $table->integer('diamond_total')->default(0);
            $table->enum('transaction_status', ['IN_CART', 'CHALLENGE', 'SUCCESS', 'PENDING', 'CANCEL', 'FAILED', 'EXPIRED']);
            $table->string('phone_number');
            $table->decimal('price',15, 0)->default(0)->nullable();
            $table->decimal('gross_amount', 10, 0)->default(0)->nullable();         
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
