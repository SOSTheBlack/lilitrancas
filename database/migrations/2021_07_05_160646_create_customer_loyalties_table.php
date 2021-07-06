<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateCustomerLoyaltiesTable.
 */
class CreateCustomerLoyaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('customer_loyalties', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class);
            $table->foreignIdFor(\App\Models\Enterprise::class);
            $table->foreignIdFor(\App\Models\EnterpriseCatalog::class);
            $table->boolean('confirmed')->default(false);
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('reserved_at');
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
        Schema::dropIfExists('customer_loyalties');
    }
}
