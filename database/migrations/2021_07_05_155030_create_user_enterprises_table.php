<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateUserEnterprisesTable.
 */
class CreateUserEnterprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('user_enterprises', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\User::class);
            $table->foreignIdFor(\App\Models\Enterprise::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('user_enterprises');
    }
}
