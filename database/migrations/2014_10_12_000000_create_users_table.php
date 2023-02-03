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
            $table->string('nik/nip', '16');
            $table->string('nama', '35');
            $table->string('username', '25');
            $table->string('email', '35')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', '32');
            $table->string('no_telp', '13');
            $table->enum('role', ['admin', 'petugas', 'masyarakat'])->default('masyarakat');
            $table->text('alamat');
            $table->text('img_profile');
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
