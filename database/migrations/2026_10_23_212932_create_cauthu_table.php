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
        Schema::create('cauthu', function (Blueprint $table) {
            $table->id();
            $table->string('ten_cau_thu');
            $table->integer('tuoi');
            $table->string('quoc_tich');
            $table->string('vi_tri');
            $table->decimal('luong', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cauthu');
    }
};
