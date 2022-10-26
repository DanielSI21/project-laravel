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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->nullable();
            $table->integer('nights_reserved')->nullable();
            $table->integer('amount_of_people')->default(1);
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->longText('comments')->nullable();
            $table->double('amount')->nullable();
            $table->foreignId('room_id')->nullable();
            $table->foreignId('client_id')->nullable();
            $table->string('status')->default('pendiente');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
