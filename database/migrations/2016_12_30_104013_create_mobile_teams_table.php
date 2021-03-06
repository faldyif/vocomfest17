<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('instance_name');
            $table->string('instance_address');
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
            $table->string('member3_name')->nullable();
            $table->string('member3_email')->nullable();
            $table->string('member3_phone')->nullable();
            $table->string('member3_identity')->nullable();
            $table->integer('progress')->default(1); // 1 if registered, 2 payment confirmed, 3 selection batch 1 pass, 4 finalist, 5 winner
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
        Schema::dropIfExists('mobile_teams');
    }
}
