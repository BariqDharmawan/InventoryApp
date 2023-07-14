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
        Schema::create('procurement_approvals', function (Blueprint $table) {
            $table->id();
            $table->string('procurements_id');
            $table->string('approve_id');
            $table->boolean('is_approve');
            $table->timestamp('action_at');
            $table->string('level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procurement_approvals');
    }
};
