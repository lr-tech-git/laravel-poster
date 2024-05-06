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
        Schema::rename('file_uploads', 'files');

        Schema::table('files', function (Blueprint $table) {
            $table->string('path')->after('filename')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('files', 'file_uploads');

        Schema::table('file_uploads', function (Blueprint $table) {
            $table->dropColumn('path');
        });
    }
};
