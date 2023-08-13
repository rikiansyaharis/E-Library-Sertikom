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
            $table->id();
            $table->foreignId('genre_id');
            $table->string('name');
            $table->string('author');
            $table->string('number_of_pages');
            $table->string('publication_years',  4);
            $table->text('file')->nullable();
            $table->string('image');
            $table->text('description');
            $table->integer('count_views')->default(0)->nullable();
            $table->timestamps();
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade')->onUpdate('restrict');
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
