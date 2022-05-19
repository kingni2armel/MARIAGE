<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilletSimplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billet_simples', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('billet_id');
            $table->foreign('billet_id')->references('id')->on('billets')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('invite_id');
            $table->foreign('invite_id')->references('id')->on('invites')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            

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
        Schema::dropIfExists('billet_simples');
    }
}
