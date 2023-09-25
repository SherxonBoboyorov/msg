<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calbacks', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('gmail');
            $table->string('phone_number');
            $table->text('comment')->nullable();
            $table->string('image')->nullable();
            $table->enum('converted', ['yes', 'no']);
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
        Schema::dropIfExists('calbacks');
    }
};