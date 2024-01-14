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
            $table->id('product_id');
            $table->string('image');
            $table->string('name');
            $table->text('description');
            $table->decimal('price');
            $table->unsignedBigInteger('category_id'); // Tambahkan baris ini
            $table->foreign('category_id')->references('id')->on('categories'); // Tambahkan baris ini
            $table->timestamps();
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
