<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNilaiKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai_kriteria', function (Blueprint $table) {
            $table->dropColumn('himpunan');
            $table->foreignId('himpunan_id')->constrained('himpunan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
            $table->dropIndex('himpunan_id');
            $table->string('himpunan', 20);
        });
    }
}
