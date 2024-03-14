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
    {   Schema::dropIfExists('transactions');
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buyer_id');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('product_id');
            $table->dateTime('date_time');
            $table->enum('state', ['pendiente', 'completada', 'cancelada']);
            $table->timestamps();

            $table->foreign('id_comprador')->references('id')->on('users');
            $table->foreign('id_vendedor')->references('id')->on('users');
            $table->foreign('id_producto')->references('id')->on('products');
            
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
