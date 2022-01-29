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
        Schema::create('tcs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('cr_id');
            $table->string('name');
            $table->string('status');
            $table->boolean('executed')->default(0);
            $table->text('notes');        
            $table->string('scope');
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
        Schema::dropIfExists('tcs');
    }
}
