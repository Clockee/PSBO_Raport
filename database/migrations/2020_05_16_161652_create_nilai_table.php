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
            $table->bigInteger('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
            $table->integer('mapel_id')->unsigned();
            $table->foreign('mapel_id')->references('id')->on('mapel');
            $table->double('h1')->default(0);
            $table->double('h2')->default(0);
            $table->double('h3')->default(0);
            $table->double('h4')->default(0);
            $table->double('h5')->default(0);
            $table->double('h6')->default(0);
            $table->double('h7')->default(0);
            $table->double('h8')->default(0);
            $table->double('hph')->default(0);
            $table->double('hpts')->default(0);
            $table->double('hpas')->default(0);
            $table->double('hpa')->default(0);
            $table->string('hpredikat')->nullable();
            $table->text('deskripsi_pengetahuan')->nullable();
            $table->double('k1')->default(0);
            $table->double('k2')->default(0);
            $table->double('k3')->default(0);
            $table->double('k4')->default(0);
            $table->double('k5')->default(0);
            $table->double('k6')->default(0);
            $table->double('k7')->default(0);
            $table->double('k8')->default(0);
            $table->double('kpa')->default(0);
            $table->string('kpredikat')->nullable();
            $table->text('deskripsi_ketrampilan')->nullable();
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
