<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAclUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acl_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 191);
            $table->string('password', 500);
            $table->string('last_name', 255);
            $table->string('first_name', 255);
            $table->tinyInteger('gender');
            $table->dateTime('birthday');
            $table->string('code', 255);
            $table->string('job_title', 255);
            $table->bigInteger('manager_id')->nullable();
            $table->string('phone', 255);
            $table->string('address1', 255);
            $table->string('address2', 255)->nullable();
            $table->string('city', 255);
            $table->string('state', 255);
            $table->string('postal_code', 255);
            $table->string('country', 255);
            $table->string('remember_token', 255)->nullable();
            $table->boolean('active_code');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('acl_users');
    }
}
