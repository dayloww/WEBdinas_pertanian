<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('sector_data', function (Blueprint $table) {
            $table->string('dataset_type')->nullable()->after('sector_id');
            $table->string('animal_name')->nullable()->after('dataset_type');
            $table->string('district_name')->nullable()->after('animal_name');
            $table->text('source')->nullable()->after('unit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sector_data', function (Blueprint $table) {
            $table->dropColumn(['dataset_type', 'animal_name', 'district_name', 'source']);
        });
    }
};
