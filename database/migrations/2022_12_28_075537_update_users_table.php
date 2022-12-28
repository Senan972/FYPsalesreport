<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($t){
            $t->string('username')->nullable();
            $t->string('photo')->nullable();
            $t->text('address')->nullable();
            $t->enum('role',['admin','vendor','user'])->default('user');
            $t->enum('status',['active','inactive'])->default('active'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($t){
            $t->dropColumn('username', 'photo', 'address', 'role', 'status');
        });
    }
}
