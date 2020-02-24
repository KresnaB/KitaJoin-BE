<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('interest')->nullable();
            $table->string('department')->nullable();
            $table->string('program')->nullable();
            $table->smallInteger('semester')->nullable();
            $table->smallInteger('ept')->nullable();
            $table->float('ip')->nullable();
            $table->string('contact')->nullable();
            $table->text('experience')->nullable();
            $table->text('desc')->nullable();
            $table->text('bio')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
