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
        Schema::create('newsletters', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2024_02_01_150100_create_products_table.php
            $table->string('name');
            $table->text('main_description');
            $table->text('description')->nullable();
            $table->text('shipping_description')->nullable();
            $table->text('small_image')->nullable();
            $table->text('ingredients')->nullable();
            $table->text('icon')->nullable();
            $table->integer('count');
            $table->integer('type')->default(1);
            $table->bigInteger('visitor')->default(0);
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->boolean('discount_type')->nullable();
            $table->unsignedBigInteger("category_id")->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
=======
            $table->string('email');
>>>>>>> 5ef127c (update):database/migrations/2024_02_08_115717_create_newsletters_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsletters');
    }
};
