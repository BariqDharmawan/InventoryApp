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
        Schema::create('peramalan', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->integer('jumlah_peramalan');
            $table->enum('month', [
                '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peramalans');
    }
};
