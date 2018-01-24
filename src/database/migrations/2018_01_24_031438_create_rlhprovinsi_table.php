<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRlhprovinsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rlhprovinsi', function (Blueprint $table) {
            $table->increments('rlhprovinsiid');
            $table->string('rlhprovinsivalue');
            $table->date('rlhprovinsitgl');
            $table->string('rlhprovinsiprovincekode');
            $table->string('rlhprovinsikotakode');
            $table->date('rlhprovinsicreatedate');
            $table->integer('rlhprovinsicreateby');
            $table->integer('rlhprovinsistatus');
            $table->integer('rlhprovinsilogid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rlhprovinsi');
    }
}
