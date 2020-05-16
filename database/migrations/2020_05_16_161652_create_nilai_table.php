<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('students_id')->unsigned();
            $table->foreign('students_id')->references('id')->on('students');
            $table->integer('mapel_id')->unsigned();
            $table->foreign('mapel_id')->references('id')->on('mapel');
            $table->double('h1');
            $table->double('h2');
            $table->double('h3');
            $table->double('h4');
            $table->double('h5');
            $table->double('h6');
            $table->double('h7');
            $table->double('h8');
            $table->double('hph');
            $table->double('hpts');
            $table->double('hpas');
            $table->double('hpa');
            $table->string('hpredikat');
            $table->text('deskripsi_pengetahuan');
            $table->double('k1');
            $table->double('k2');
            $table->double('k3');
            $table->double('k4');
            $table->double('k5');
            $table->double('k6');
            $table->double('k7');
            $table->double('k8');
            $table->double('kpa');
            $table->string('kpredikat');
            $table->text('deskripsi_ketrampilan');
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
        Schema::dropIfExists('nilai');
    }
}
