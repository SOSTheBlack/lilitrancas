<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterpriseCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise_catalogs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Enterprise::class);
            $table->string('name');
            $table->float('price')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamp('started_at')->default(now());
            $table->timestamp('ended_at')->nullable();
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
        Schema::dropIfExists('enterprise_catalogs');
    }
}
