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
        Schema::create('procurements', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->bigInteger('price');
            $table->integer('users_id');
            $table->integer('supplier_id');
            $table->timestamp('action_at');
            $table->enum('status', ['ongoing', 'done'])->default('done');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procurements');
    }
};
