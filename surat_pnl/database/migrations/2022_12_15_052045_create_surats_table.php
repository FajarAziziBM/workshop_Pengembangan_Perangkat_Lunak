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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jenis_surat')->constrained('jenis_surats')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('id_user')->constrained('users')->onUpdate('cascade')->onDelete('restrict');
            $table->dateTime('tgl_permohonan');
            $table->string('form_surat');
            $table->dateTime('tgl_selesai');
            $table->string('dokumen_surat');
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
        Schema::dropIfExists('surats');
    }
};
