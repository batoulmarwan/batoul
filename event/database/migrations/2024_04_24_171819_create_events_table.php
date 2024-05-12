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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
           $table->foreignId('type_event_id')->constrained('type_events');
           $table->foreignId('budget_id')->constrained('budgets');
           $table->foreignId('place_id')->constrained('places');
           $table->foreignId('user_id')->constrained('users');
           $table->foreignId('admin_id')->constrained('admins')->nullable();
            $table->dateTime('date_event')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
