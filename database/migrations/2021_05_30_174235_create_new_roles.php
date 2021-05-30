<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('user_role')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);

        DB::table('roles')->insert([
            'name' => 'administrator',
            'role_id' => 'publisher'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_roles');
    }
}
