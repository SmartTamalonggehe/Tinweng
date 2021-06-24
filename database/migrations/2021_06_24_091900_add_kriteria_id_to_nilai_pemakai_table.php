<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKriteriaIdToNilaiPemakaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai_pemakai', function (Blueprint $table) {
            $table->dropForeign(['nilai_kriteria_id']);
            $table->dropColumn('nilai_kriteria_id');
            $table->foreignId('kriteria_id')->constrained('kriteria')
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
        Schema::table('nilai_pemakai', function (Blueprint $table) {
            $table->dropForeign(['kriteria_id']);
            $table->dropColumn('kriteria_id');
            $table->foreignId('nilai_kriteria_id')->constrained('nilai_kriteria')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }
}
