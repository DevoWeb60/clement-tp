<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('email', 250);
            $table->text('message')->nullable();
            $table->string('file', 250)->nullable();
            $table->string('phone', 250)->nullable();
            $table->string('firstname', 250);
            $table->string('lastname', 250);
            $table->unsignedBigInteger('states_id')->nullable();
            $table->foreign('states_id')->references('id')->on('candidate_states');
            $table->foreignId('job_offer_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
