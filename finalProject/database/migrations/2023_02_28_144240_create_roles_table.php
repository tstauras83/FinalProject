<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Inserting default roles into the roles table
        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'description' => 'Has access to all features of the system',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Staff',
                'description' => 'Has access to assigned events and staff-related features',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Guest',
                'description' => 'Can view event details and RSVP to attend events',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
