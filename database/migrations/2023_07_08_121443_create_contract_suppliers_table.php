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
        Schema::create('contract_suppliers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contract_value');
            $table->string('title');
            $table->string('supplier_id');
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('filename')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_suppliers');
    }
};
