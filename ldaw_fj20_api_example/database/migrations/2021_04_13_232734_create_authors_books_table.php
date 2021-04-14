<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_books', function (Blueprint $table) {

            $table->id();

            $table->foreignId("author_id")
                ->nullable()
                ->constrained()
                ->onDelete("set null")
                ->onUpdate("cascade");

            $table->foreignId("book_id")
                ->nullable()
                ->constrained()
                ->onDelete("set null")
                ->onUpdate("cascade");

            //Llave única compuesta
            $table->unique(["author_id","book_id"]);

            //$table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors_books');
    }
}
