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
            $table->string('username')->nullable()->comment("for admin and student");
            $table->string('name_ar')->nullable()->comment("for teacher");
            $table->string('name_en')->nullable()->comment("for teacher");
            $table->string('mobile')->unique();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->float('rating', 2, 1)->nullable()->default(0.0);
            $table->enum('type', ['1', '2', '3'])->comment("[admin, teacher, student]");
            $table->enum('position', ['1', '2', '3', '4'])->nullable()->comment("[junior, senior, expert, great]");
            $table->string('image')->nullable();
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
