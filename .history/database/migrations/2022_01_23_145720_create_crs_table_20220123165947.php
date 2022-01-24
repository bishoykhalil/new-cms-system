<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Crs', function (Blueprint $table) {
            //
            $table->integer('id');
            $table->string('cr_name');
            $table->string('status,)
            'system_id',
            'hasIOT',
            'hasE2E'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Crs', function (Blueprint $table) {
            //
        });
    }
}
