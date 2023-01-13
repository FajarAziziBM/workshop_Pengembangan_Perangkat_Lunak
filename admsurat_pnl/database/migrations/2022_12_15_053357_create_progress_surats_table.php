<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress_surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_surat')->constrained('surats')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('progress')->length(1);
            $table->string('ket')->length(100);
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
        Schema::dropIfExists('progress_surats');
    }
};
