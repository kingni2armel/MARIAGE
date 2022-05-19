<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilletCouplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billet_couples', function (Blueprint $table) {
            $table->id();

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
        Schema::dropIfExists('billet_couples');
    }
}
