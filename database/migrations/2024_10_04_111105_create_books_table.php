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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('title',100);
            $table->text('synopsis');
            $table->string('editorial')->nullable();
            $table->unsignedInteger('price');
            $table->string('image')->nullable();
            $table->string('author')->nullable();

            $table->unsignedBigInteger('genre_fk')->nullable();
            $table->foreign('genre_fk')->references('genre_id')->on('genres');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
