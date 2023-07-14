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
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->string('qty');
            $table->string('price');
            $table->string('contract_supplier_id');
            $table->integer('product_id');
            $table->timestamp('approved_at');
            $table->timestamp('rejected_at');
            $table->timestamp('finished_at');
            $table->integer('approved_by');
            $table->integer('rejected_by');
            $table->integer('finished_by');
            $table->enum('approval_type', ['first', 'second']);
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
