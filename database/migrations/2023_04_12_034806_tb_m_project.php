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
        Schema::create('tb_m_project', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->constraint('tb_m_client')->onDelete('cascade');
            $table->string('project_name');
            $table->date('project_start');
            $table->date('project_end');
            $table->enum('project_status', ['Open', 'Doing', 'Done']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
