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
        Schema::create('crs', function (Blueprint $table) {

  $table->id();
            $table->integer('release_id')->unsigned()->nullable()->index();
            $table->string('cr_name');
            $table->integer('tcs_total');
            $table->integer('tcs_success')->default('0');
            $table->integer('tcs_failed')->default('0');
            $table->integer('tcs_blocked')->default('0');
            $table->integer('tcs_invalid')->default('0');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('crs');
    }
}
