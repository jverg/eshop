<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Create books table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('author');
            $table->string('isbn')->unique();
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Delete books table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
