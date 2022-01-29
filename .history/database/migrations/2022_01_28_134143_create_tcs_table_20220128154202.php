<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Tc', function (Blueprint $table) {
            //
            $table->id();
            $table->integer('user_id');
            $table->integer('crs_id');       
            $table->string('name');
            $table->string('status');
            $table->string('scope');
            $table->boolean('executed')->default(0);
            $table->text('notes');
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
        Schema::table('Tc', function (Blueprint $table) {
            //
        });
    }
}
