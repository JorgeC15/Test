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
        Schema::create('a_itba', function (Blueprint $table) { 
            $table->char('ENTIDAD', 2);
            $table->char('MUNICIPIO', 3);
            $table->char('LOCALIDAD', 4);
            $table->string('NOMBRELOC', 110)->nullable();
            $table->string('SUPERFICIE', 8)->nullable();
            $table->char('CATPOB', 1)->nullable();
            $table->string('CLAVECART', 7)->nullable();
            $table->string('AGEB', 5)->nullable();
            $table->char('LONGITUD', 7)->nullable();
            $table->char('LATITUD', 6)->nullable();
            $table->char('ALTITUD', 4)->nullable();
            $table->string('HABITANTES', 9)->nullable();
            $table->string('HOMBRES', 9)->nullable();
            $table->string('MUJERES', 9)->nullable();
            $table->string('LENGUA', 4)->nullable();
            $table->char('AGUAENTUBA', 1)->nullable();
            $table->char('AGUAPOZO', 1)->nullable();
            $table->char('AGUAMANANT', 1)->nullable();
            $table->char('AGUAALJIBE', 1)->nullable();
            $table->char('AGUAPIPA', 1)->nullable();
            $table->char('AGUANO', 1)->nullable();
            $table->char('DRENAJE', 1)->nullable();
            $table->char('FOSA', 1)->nullable();
            $table->char('ELECTRICID', 1)->nullable();
            $table->char('FAX', 1)->nullable();
            $table->char('TELEFONO', 1)->nullable();
            $table->char('SERVCOMP', 1)->nullable();
            $table->char('ACCESOPAVI', 1)->nullable();
            $table->char('ACCESOREVE', 1)->nullable();
            $table->char('ACCESOTERR', 1)->nullable();
            $table->char('ACCESOBREC', 1)->nullable();
            $table->char('ACCESOVERE', 1)->nullable();
            $table->char('ACCESOOTRO', 1)->nullable();
            $table->string('ACCESOESPE', 60)->nullable();
            $table->string('AREAMETRO', 100)->nullable();
            $table->string('FRONTERA', 5)->nullable();
            $table->float('INDICEMARG', 20, 16)->nullable();
            $table->string('GRADOMARGI', 10)->nullable();
            $table->string('ZONAECONOM', 3)->nullable();
            $table->char('CODPOST', 5)->nullable();
            $table->char('INDCT', 1)->nullable();
            $table->string('FECHAALTA', 8)->nullable();
            $table->string('FECHAACTUA', 8)->nullable();
            $table->string('FECHASOL', 8)->nullable();
            $table->string('FECHABAJA', 8)->nullable();
            $table->string('FOLIO', 44)->nullable();
            $table->string('OBSERVACIO', 100)->nullable();
            $table->char('STATUS', 1)->nullable();

            // Definir primary key compuesta
            $table->primary(['ENTIDAD', 'MUNICIPIO', 'LOCALIDAD']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_itbas');
    }
};
