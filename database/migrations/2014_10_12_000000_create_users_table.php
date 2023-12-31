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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Divisi_id')->nullable();
            $table->foreignId('Role_id');
            $table->foreignId('Status_id');
            $table->string('gambar')->nullable();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telp');
            $table->string('email');
            $table->string('password');
            $table->string('StatusHRD')->nullable();
            $table->string('StatusKABAG')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
