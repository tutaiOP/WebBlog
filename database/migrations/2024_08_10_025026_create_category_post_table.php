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
        Schema::create('category_post', function (Blueprint $table) {
            $table->id(); // Cột id kiểu unsignedBigInteger
            $table->unsignedBigInteger('post_id'); // Đảm bảo kiểu dữ liệu khớp
            $table->unsignedBigInteger('category_id'); // Đảm bảo kiểu dữ liệu khớp
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }




    public function down(): void
    {
        Schema::dropIfExists('category_post');
    }
};
