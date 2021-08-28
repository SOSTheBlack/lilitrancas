<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_urls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('ref_id')->nullable();
            $table->string('ref_model')->nullable();
            $table->string('destination_url');
            $table->string('url_key');
            $table->string('default_short_url');
            $table->boolean('single_use');
            $table->boolean('track_visits');
            $table->timestamps();

            $table->unique(['ref_id', 'ref_model']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('short_urls');
    }
}
