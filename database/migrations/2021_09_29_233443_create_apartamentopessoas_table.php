<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartamentopessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamentopessoas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pessoa_id");
            $table->unsignedBigInteger("apartamento_id");
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('apartamento_id')->references('id')->on('apartamentos');
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
        Schema::dropIfExists('apartamentopessoas');
    }
}
