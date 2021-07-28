<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthday');
            $table->string('phone');
            $table->text('address');
            $table->unsignedInteger('department_id');
            // $table->unsignedInteger('department_id');
            // $table->foreign('department_id')
            // ->references('id')
            // ->on('departments')
            // ->onDelete('cascade');
            $table->float('salary');
            $table->string('photo')->nullable();
            // $table->string('certificate')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
