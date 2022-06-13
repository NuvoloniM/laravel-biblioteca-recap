<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_genre', function (Blueprint $table) {
            $table->id();

            // questa è la tabella ponte che collega tramite i due id due tabelle
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('genre_id');
            // segnalo le due foreign key
            $table->foreign('book_id')->references('id')->on('book')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');

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
        Schema::dropIfExists('book_genre');
    }
}
