<?php
    /**
     * Created by PhpStorm.
     * User: Erin Lorelle
     * Date: 4/7/2018
     * Time: 3:25 PM
     */
    
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('start_year'); // with semester
            $table->string('degree');
            $table->string('institution');
            $table->string('qualifications');
            $table->string('credentials');
            $table->string('department');
            $table->string('college');
            $table->string('type');
            $table->string('title');
            //$table->integer('role_id')->unsigned()->nullable();  //choose this or default below
            //$table->integer(role_id)->unsigned()->default(1);
            //$table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
