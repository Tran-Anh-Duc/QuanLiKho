<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAclRoleHasPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acl_role_has_permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('role_id');
            $table->bigInteger('permission_id');
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
        Schema::dropIfExists('acl_role_has_permissions');
    }
}
