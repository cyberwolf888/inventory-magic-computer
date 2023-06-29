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
            $table->uuid('id')->primary();
            $table->uuid('rak_id')->foreign('rak_id')->references('id')->on('raks')->onDelete('cascade');
            $table->uuid('lokasi_id')->foreign('lokasi_id')->references('id')->on('lokasis')->onDelete('cascade');
            $table->uuid('category_id')->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
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
