<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthorIdToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('books', function (Blueprint $table) {
        //     $table->foreignId('author_id')->after('title')->nullable()->onDelete('set null')->constrained();
        // });
        Schema::table('books', function (Blueprint $table) {
            $table->unsignedBigInteger('author_id')->nullable()->after('title');

            $table->foreign('author_id')->references('id')->on('authors')->onDelete('set null');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign('books_author_id_foreign');

            $table->dropColumn('author_id');
        });
    }
}
