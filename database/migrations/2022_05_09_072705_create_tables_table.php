<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_table_id');
            $table->foreign('type_table_id')->references('id')->on('type_tables')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('nom_table');
            $table->text('commentaire_table');
            $table->integer('nombre_de_place_table');
            $table->boolean('statut_table')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->date('date_creation_table');
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
        Schema::dropIfExists('tables');
    }
}
