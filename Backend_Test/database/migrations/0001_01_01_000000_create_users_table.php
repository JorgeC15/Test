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
        Schema::create('ppx_usuario', function (Blueprint $table) {
            $table->bigIncrements('idUsuario'); // ID primario
            $table->string('nombre_usuario', 255)->nullable();
            $table->unsignedBigInteger('idTipoUsuario')->nullable();
            $table->string('userlogin', 25)->nullable();
            $table->string('userpassword', 60)->nullable();
            $table->date('fecha_alta')->nullable();
            $table->timestamp('fecha_modif')->nullable();
            $table->char('clavecct', 10)->nullable();
            $table->unsignedBigInteger('idTurno')->nullable();
            $table->unsignedBigInteger('idEstatus')->nullable();
            $table->char('nivel', 2)->nullable();
            $table->dateTime('ultima_session')->nullable();

            // Si quieres relaciones:
            // $table->foreign('idTipoUsuario')->references('id')->on('tipo_usuarios');
            // $table->foreign('idTurno')->references('id')->on('turnos');
            // $table->foreign('idEstatus')->references('id')->on('estatus');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppx_usuario');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};

