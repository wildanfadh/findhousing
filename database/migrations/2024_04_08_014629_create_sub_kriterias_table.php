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
        Schema::create('sub_kriteria', function (Blueprint $table) {
            $table->id();
            $table->integer('kriteria_id')->unsigned()->comment('ID dari tabel kriteria');
            $table->string('uraian', 100)->nullable(false)->comment('Uraian sub kriteria');
            $table->integer('nilai')->default(0)->comment('Nilai atau bobot dari sub kriteria');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_kriteria');
    }
};
