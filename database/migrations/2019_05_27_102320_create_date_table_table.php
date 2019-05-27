<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDateTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('Name');
            $table->char('Position');
            $table->char('Office');
            $table->integer('Age');
            $table->date('StartDate');
            $table->integer('Salary');
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
        Schema::dropIfExists('date_table');
    }
}
