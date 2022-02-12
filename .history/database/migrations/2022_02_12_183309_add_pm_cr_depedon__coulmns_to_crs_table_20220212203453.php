<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPmCrDepedonCoulmnsToCrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crs', function (Blueprint $table) {
            $table->string('internal_support')->default(null);
            $table->string('external_support')->default(null);
            $table->string('dependOn')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crs', function (Blueprint $table) {
            //
        });
    }
}
