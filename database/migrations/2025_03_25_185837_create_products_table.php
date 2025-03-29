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
            $table->float('new_price');
            $table->float('old_price')->nullable();
            $table->string('image')->nullable();
            $table->integer('sale')->nullable();
            $table->integer('quantity')->default(0);
            $table->enum('feature' , ['New' ,'Feature' , 'Brand'])->nullable();
            $table->enum('status' , ['active' ,'inActive'])->default('active');
            $table->enum('availabale' , ['0' ,'1'])->default('1');
            $table->float('rate')->nullable();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
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
