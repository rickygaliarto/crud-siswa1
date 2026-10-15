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
    Schema::create('tb_siswa', function (Blueprint $table) {
        $table->string('nis', 20)->primary();
        $table->string('nama', 100);
        $table->string('rombel', 50);
        $table->string('rayon', 50);
        $table->string('no_telp', 20);
        $table->text('alamat');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
