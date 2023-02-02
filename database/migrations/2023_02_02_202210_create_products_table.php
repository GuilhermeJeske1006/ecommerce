<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductId');
            $table->foreignId('FK_imgId')->references('id')->on('images_products')->onDelete('set null');;
            $table->unsignedBigInteger('FK_imgId');
            $table->foreignId('FK_categoryId')->references('id')->on('categories')->onDelete('set null');;
            $table->unsignedBigInteger('FK_categoryId');
            $table->string('name');
            $table->longText('descLong');
            $table->text('descShort');
            $table->decimal('price');
            $table->integer('amount');
            $table->string('size');
            $table->string('color');
            $table->string('weight');
            $table->string('dimensions');
            $table->string('materials');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
