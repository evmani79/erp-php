<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('purchases', 'financial_year')) {
            Schema::table('purchases', function (Blueprint $table) {
                $table->string('financial_year')->nullable()->after('purchase_date');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('purchases', 'financial_year')) {
            Schema::table('purchases', function (Blueprint $table) {
                $table->dropColumn('financial_year');
            });
        }
    }
};
