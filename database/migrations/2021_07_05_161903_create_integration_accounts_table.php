<?php

use App\Models\Integration;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateIntegrationAccountsTable
 */
class CreateIntegrationAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('integration_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Integration::class);
            $table->string('ref_type');
            $table->bigInteger('ref_id')->unsigned();
            $table->string('name');
            $table->boolean('active')->default(true);
            $table->json('settings')->nullable();
            $table->timestamp('resynced_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('integration_accounts');
    }
}
