<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionSubscriberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('champion_subscriber', function (Blueprint $table) {
                $table->integer('champion_id')->unsigned();
                $table->integer('subscriber_id')->unsigned();
                $table->primary(['champion_id', 'subscriber_id']);
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
        Schema::dropIfExists('champion_subscriber');
    }
}
