<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')
                ->unique();
            $table->string('email')
                ->unique();
            $table->string('phone')
                ->unique();
            $table->string('name');
            $table->string('address');
            $table->string('job');
            $table->string('position');
//            $table->enum('status', [
//                'speaker', 'audience', 'mc' //mc = maser_of_ceremony
//            ]);
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
        Schema::dropIfExists('participants');
    }
}
