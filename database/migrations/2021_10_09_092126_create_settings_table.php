<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_icon')->nullable();
            $table->string('logo')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('tw_link')->nullable();
            $table->string('in_link')->nullable();
            $table->string('ig_link')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('footer_info')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
