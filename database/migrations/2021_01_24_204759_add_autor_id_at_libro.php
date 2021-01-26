<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAutorIdAtLibro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('autors', function (Blueprint $table) {
            $table->bigInteger('libros_id')->unsigned()->nullable()->after('id');
            $table->foreign('libros_id')->references('id')->on('libros')
                                        ->onDelete('set null')
                                        ->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
