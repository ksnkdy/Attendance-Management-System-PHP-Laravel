<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceDBsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance__d_bs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('clock_in');
            $table->string('clock_out');
            $table->string('workred_hours');
            $table->string('ot_hours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance__d_bs');
    }
}
