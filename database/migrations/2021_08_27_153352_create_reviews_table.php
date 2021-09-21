<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')
                ->constrained("users")
                ->onDelete('cascade');
            $table->foreignId('teacher_id')
                ->constrained("users")
                ->onDelete('cascade');
            $table->longText('message');
            $table->enum('status', ['0', '1', '2'])->default('0')->comment('0 for pending 1 for approved 2 for reject');
            $table->tinyInteger('rate')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
