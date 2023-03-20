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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->string('job_title')->nullable();
            $table->date('employment_date')->nullable();
            $table->date('termination_date')->nullable();
            $table->decimal('salary', 8, 2)->nullable();
            $table->string('department')->nullable();
            $table->string('photo_url')->nullable();
            $table->timestamps();


            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
