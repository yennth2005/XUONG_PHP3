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
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('color'); // Bỏ cột color kiểu string
            $table->unsignedInteger('color_id')->nullable()->after('name'); // Thêm cột color_id
            $table->foreign('color_id')
                  ->references('id')->on('colors')
                  ->onDelete('set null'); // Hoặc 'restrict' tùy theo logic của bạn
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['color_id']); // Xóa foreign key
            $table->dropColumn('color_id'); // Xóa cột color_id
            $table->string('color', 50)->nullable()->after('name'); // Thêm lại cột color kiểu string (cho rollback)
        });
    }
};