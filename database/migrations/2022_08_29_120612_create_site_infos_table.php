<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('title', 250);
            $table->string('phone', 250);
            $table->string('address', 250);
            $table->text('iframe_map')->nullable();
            $table->string('google_link', 250)->nullable();
            $table->string('email', 250);
            $table->string('logo', 250);
            $table->string('favicon', 250);
            $table->string('facebook', 250)->nullable();
            $table->string('instagram', 250)->nullable();
            $table->string('pinterest', 250)->nullable();
            $table->string('linkedin', 250)->nullable();
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
        Schema::dropIfExists('site_infos');
    }
}
