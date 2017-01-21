<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('school_name');
            $table->string('school_address');
            $table->string('leader_name');
            $table->string('leader_phone');
            $table->string('leader_identity')->nullable();
            $table->string('member1_name')->nullable();
            $table->string('member1_email')->nullable();
            $table->string('member1_phone')->nullable();
            $table->string('member1_identity')->nullable();
            $table->string('member2_name')->nullable();
            $table->string('member2_email')->nullable();
            $table->string('member2_phone')->nullable();
            $table->string('member2_identity')->nullable();
            $table->integer('progress')->default(1); // 1 if registered, 2 payment confirmed, 3 finalist, 4 if winner
            $table->integer('verified')->default(0); // 0 if unverified, 1 if locked profile (waiting for verification), 2 if verified
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
        Schema::dropIfExists('web_teams');
    }
}
