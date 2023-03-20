<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staff_event_assignments', function (Blueprint $table) {
            $table->unsignedBigInteger('staff_id')->nullable()->change();
            $table->unsignedBigInteger('event_id')->nullable()->change();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->nullable()->change();

        });
        Schema::table('guests', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->nullable()->change();

        });
        Schema::table('staff', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->nullable()->change();

        });
        Schema::table('guest_event_attendances', function (Blueprint $table) {
            $table->unsignedBigInteger('guest_id')->nullable()->change();
            $table->unsignedBigInteger('event_id')->nullable()->change();
        });



        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
        });

        Schema::table('guests', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
        });

        Schema::table('staff', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
        });

        Schema::table('staff_event_assignments', function (Blueprint $table) {
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('set null');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('set null');
        });

        Schema::table('guest_event_attendances', function (Blueprint $table) {
            $table->foreign('guest_id')->references('id')->on('guests')->onDelete('set null');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
        });

        Schema::table('guests', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
        });

        Schema::table('staff', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
        });


        Schema::table('staff_event_assignments', function (Blueprint $table) {
            $table->unsignedBigInteger('staff_id')->nullable(false)->change();
        });

        Schema::table('staff_event_assignments', function (Blueprint $table) {
            $table->dropForeign(['staff_id']);
            $table->dropForeign(['event_id']);
        });

        Schema::table('guest_event_attendances', function (Blueprint $table) {
            $table->dropForeign(['guest_id']);
            $table->dropForeign(['event_id']);
        });
    }
};
