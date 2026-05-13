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
            $table->boolean('show_on_admin_dashboard')->default(true)->after('district_name');
            $table->boolean('show_on_front')->default(false)->after('show_on_admin_dashboard');
            $table->unsignedInteger('front_order')->default(0)->after('show_on_front');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sector_data', function (Blueprint $table) {
            $table->dropColumn(['show_on_admin_dashboard', 'show_on_front', 'front_order']);
        });
    }
};
