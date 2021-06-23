<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMetodeToNilaiKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai_kriteria', function (Blueprint $table) {
            $table->string('metode', 10); // Hitung Menggunakan Nilai Himpunan Atau Nilai Kriteria
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nilai_kriteria', function (Blueprint $table) {
            $table->dropColumn('metode');
        });
    }
}
