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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->text('description')->nullable();
            $table->decimal('price', 12, 2);
            $table->string('unit')->default('pcs');
            $table->unsignedBigInteger('product_category_id');
            $table->unsignedBigInteger('product_discount_id')->nullable();
            $table->timestamps();

            $table->foreign('product_category_id')->references('id')->on('product_categories');
            $table->foreign('product_discount_id')->references('id')->on('product_discounts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
