<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('office_code');
            $table->integer('reports_to')->nullable();;
            $table->string('lastname');
            $table->string('firstname');
            $table->string('extension');
            $table->string('email');
            $table->string('job_title');
            $table->foreign('office_code')->references('id')->on('offices');
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
        Schema::dropIfExists('employees');
    }
}
