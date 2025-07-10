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
        Schema::create('catmun', function (Blueprint $table) {
            $table->char('ENT', 2);
            $table->char('MUNICIPIO', 3);
            $table->string('NOM', 32)->nullable();
            $table->char('ALTAMARG', 1)->nullable();
            $table->char('GDO_MARGI', 10)->nullable();
            $table->char('PARE', 1)->nullable();
            $table->char('PANUF', 1)->nullable();
            $table->char('REGION', 3)->nullable();
            $table->char('REG_COP', 2)->nullable();
            $table->char('SUBREG_COP', 1)->nullable();
            $table->char('REG_PRIO', 2)->nullable();
            $table->decimal('PAGO', 3, 0)->nullable();
            $table->char('MARCA', 1)->nullable();
            $table->char('MAQUI', 1)->nullable();
            $table->char('DIST_IFE', 1)->nullable();
            $table->char('NIV', 1)->nullable();
            $table->decimal('E694', 6, 0)->nullable();
            $table->decimal('E695', 6, 0)->nullable();
            $table->decimal('E696', 6, 0)->nullable();
            $table->decimal('E697', 6, 0)->nullable();
            $table->decimal('I1S94', 6, 0)->nullable();
            $table->decimal('I1S95', 6, 0)->nullable();
            $table->decimal('I1S96', 6, 0)->nullable();
            $table->decimal('I1S97', 6, 0)->nullable();
            $table->char('DPR', 1)->nullable();
            $table->char('DPB', 1)->nullable();
            $table->char('CCT', 1)->nullable();
            $table->char('PMD', 1)->nullable();
            $table->char('BAC', 1)->nullable();
            $table->char('SEDE1', 1)->nullable();
            $table->char('SEDE2', 1)->nullable();
            $table->char('SEDE3', 1)->nullable();
            $table->char('SI', 1)->nullable();

            // Primary key compuesta
            $table->primary(['ENT', 'MUNICIPIO']);

            // Índices adicionales
            $table->unique('MUNICIPIO');
            $table->index('NOM');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catmuns');
    }
};
