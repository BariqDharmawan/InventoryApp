<?php

use App\Models\StockFlow;
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
        Schema::create('stock_flows', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->enum('type', StockFlow::TYPE_FLOW);
            $table->timestamp('date');
            $table->bigInteger('qty');
            $table->integer('procurement_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_flows');
    }
};
