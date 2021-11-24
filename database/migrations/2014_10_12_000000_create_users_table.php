<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('real_password');
            $table->rememberToken();
            $table->timestamps();
        });

        $data = [
            ['name' => 'Rajeev','email' => 'rajeev@gmail.com','password' => Hash::make('secret'),'real_password' => 'secret'],
            ['name' => 'Suvajit','email' => 'suvajit@gmail.com','password' => Hash::make('secret'),'real_password' => 'secret'],
            ['name' => 'Papiya','email' => 'papiya@gmail.com','password' => Hash::make('secret'),'real_password' => 'secret'],
            ['name' => 'Aasim','email' => 'aasim@gmail.com','password' => Hash::make('secret'),'real_password' => 'secret'],
            ['name' => 'Arpan','email' => 'arpan@gmail.com','password' => Hash::make('secret'),'real_password' => 'secret'],
        ];
        DB::table('users')->insert($data);
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
