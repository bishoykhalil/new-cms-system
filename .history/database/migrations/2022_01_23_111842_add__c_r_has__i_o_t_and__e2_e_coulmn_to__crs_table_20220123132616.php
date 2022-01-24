<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCRHasIOTAndE2ECoulmnToCrsTable extends Migration
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
            $table->boolean('hasIOT')->default('0');
            $table->boolean('hasE2E')->default('0');
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
            $table->dropColumn('hasIOT');
            $table->dropColumn('hasE2E');
        });
    }
}
