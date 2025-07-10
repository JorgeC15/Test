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
         Schema::create('a_ctba', function (Blueprint $table) {
            $table->char('CLAVECCT', 10)->primary();
            $table->string('NOMBRECT', 150)->nullable();
            $table->string('DOMICILIO', 100)->nullable();
            $table->string('NUMEXT', 5)->nullable();
            $table->string('ALFANUMEXT', 80)->nullable();
            $table->string('NUMINT', 80)->nullable();
            $table->string('ALFANUMINT', 80)->nullable();
            $table->string('ENTRECALLE', 60)->nullable();
            $table->string('YCALLE', 60)->nullable();
            $table->string('CALLEPOST', 60)->nullable();
            $table->string('DELEGACION', 2)->nullable();
            $table->string('COLONIA', 4)->nullable();
            $table->string('ASENTAMIEN', 120)->nullable();
            $table->char('LOCALIDAD', 4)->nullable();
            $table->string('ENT_SEP', 2)->nullable();
            $table->string('LOC_SEP', 4)->nullable();
            $table->char('MUNICIPIO', 3)->nullable();
            $table->string('MUN_SEP', 3)->nullable();
            $table->string('CODPOST', 5)->nullable();
            $table->string('LADA', 6)->nullable();
            $table->string('TELEFONO', 8)->nullable();
            $table->string('TELEXTEN', 5)->nullable();
            $table->string('TELEFONO2', 8)->nullable();
            $table->string('TELEXTEN2', 5)->nullable();
            $table->string('TELEFONO3', 8)->nullable();
            $table->string('TELEXTEN3', 5)->nullable();
            $table->string('FAX', 8)->nullable();
            $table->string('FAXEXTEN', 5)->nullable();
            $table->string('FAX2', 8)->nullable();
            $table->string('FAXEXTEN2', 5)->nullable();
            $table->string('FAX3', 8)->nullable();
            $table->string('FAXEXTEN3', 5)->nullable();
            $table->string('CELULAR1', 13)->nullable();
            $table->string('CELULAR2', 13)->nullable();
            $table->string('CELULAR3', 13)->nullable();
            $table->string('CORREOELE', 100)->nullable();
            $table->string('PAGINAWEB', 100)->nullable();
            $table->char('TURNO', 3)->nullable();
            $table->string('ZONAESCOLA', 3)->nullable();
            $table->string('CCT_ZONA', 10)->nullable();
            $table->string('SUPEDUCFIS', 3)->nullable();
            $table->string('CCT_EDUFIS', 10)->nullable();
            $table->string('SECTOR', 2)->nullable();
            $table->string('CCT_SECTOR', 10)->nullable();
            $table->string('SERREG', 3)->nullable();
            $table->string('CCT_SERREG', 10)->nullable();
            $table->string('ALMACEN', 4)->nullable();
            $table->string('CCT_ALMACE', 10)->nullable();
            $table->string('AGEB', 5)->nullable();
            $table->string('CLAVECART', 6)->nullable();
            $table->string('LONGITUD', 14)->nullable();
            $table->string('LON_DMS', 80)->nullable();
            $table->string('LATITUD', 12)->nullable();
            $table->string('LAT_DMS', 80)->nullable();
            $table->string('ALTITUD', 4)->nullable();
            $table->string('DESC_UBIC', 120)->nullable();
            $table->char('DEPADMVA', 1)->nullable();
            $table->string('DEPNORMTVA', 2)->nullable();
            $table->string('SERVICIO', 2)->nullable();
            $table->string('SOSTENIMIE', 2)->nullable();
            $table->string('INMUEBLE', 10)->nullable();
            $table->char('INM_RESP', 1)->nullable();
            $table->string('PLANTEL', 10)->nullable();
            $table->string('CLAVEINSTI', 10)->nullable();
            $table->string('CURP', 18)->nullable();
            $table->string('RFC', 13)->nullable();
            $table->string('DIRECTOR', 80)->nullable();
            $table->string('APELLIDO1', 50)->nullable();
            $table->string('APELLIDO2', 50)->nullable();
            $table->string('FECHAFUNDA', 8)->nullable();
            $table->string('FECHAALTA', 8)->nullable();
            $table->string('FECHACLAUS', 8)->nullable();
            $table->string('FECHAREAPE', 8)->nullable();
            $table->string('FECHACAMBI', 8)->nullable();
            $table->string('FECHAACTUA', 8)->nullable();
            $table->string('CVEASIGNA', 10)->nullable();
            $table->string('FECHASOL', 8)->nullable();
            $table->string('AREASOL', 60)->nullable();
            $table->string('PUESTOSOL', 60)->nullable();
            $table->string('NOMBRESOL', 80)->nullable();
            $table->string('MOTIVO', 2)->nullable();
            $table->char('MOTBAJA', 1)->nullable();
            $table->string('FOLIO', 60)->nullable();
            $table->string('OBSERVACIO', 100)->nullable();
            $table->char('STATUS', 1)->nullable();
            $table->string('NIVEL', 2)->nullable();
            $table->char('INCORPORAC', 1)->nullable();
            $table->string('DIR_ANTERI', 80)->nullable();
            $table->string('NOMBRECOL', 50)->nullable();
            $table->string('OK', 10)->nullable();
            $table->string('REGIONT', 10)->nullable();
            $table->string('SUBREGT', 10)->nullable();
            $table->string('REGIONOP', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_ctbas');
    }
};
