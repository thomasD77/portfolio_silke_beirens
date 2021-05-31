<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('is_active')->default(1);
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('photo_id')->default(2);
            $table->string('password');
            $table->string('provider_id')->nullable();
            $table->string('provider')->nullable();
            $table->string('avatar')->nullable();
            $table->string('access_token')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('users')->insert([
            'name'=>'Thomas',
            'email'=>'thomas.demeulenaere@hotmail.com',
            'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'photo_id'=> 1,
            'password'=>bcrypt('@Skatemovies777'),
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'silke@admin.be',
            'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'photo_id'=> 2,
            'password'=>bcrypt('12345678'),
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
