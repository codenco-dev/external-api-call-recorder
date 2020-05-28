<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalApiCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_api_calls', function (Blueprint $table) {
            $table->id();
            $table->longText('sent_payload')->nullable();
            $table->longText('received_payload')->nullable();
            $table->string('path',255);
            $table->longText('body');
            $table->longText('return');
            $table->string('token');
            $table->string('status');
            $table->foreignId('external_api_id')->constrained();

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
        Schema::dropIfExists('external_api_calls');
    }
}
