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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_admin')->constrained('admins')->references('id')->on('admins')->onDelete('cascade');
            $table->foreignId('id_category')->constrained('categories')->references('id')->on('categories')->onDelete('cascade');
            $table->string('title');
            $table->string('thumbnail');
            $table->string('description');
            $table->integer('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
