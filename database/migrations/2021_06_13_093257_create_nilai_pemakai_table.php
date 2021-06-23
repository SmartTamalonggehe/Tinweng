<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiPemakaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_pemakai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemakai_id')->constrained('pemakai')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('nilai_kriteria_id')->constrained('nilai_kriteria')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_pemakai');
    }
}
