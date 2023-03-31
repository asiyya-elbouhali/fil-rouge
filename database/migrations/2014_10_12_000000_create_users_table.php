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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
	// profile_photo_path text NULL,
	// superuser int2 NOT NULL DEFAULT 0,
	// company varchar(100) NOT NULL DEFAULT ''::character varying,
	// firstname varchar(64) NOT NULL DEFAULT ''::character varying,
	// lastname varchar(64) NOT NULL DEFAULT ''::character varying,
	// address1 varchar(200) NOT NULL DEFAULT ''::character varying,
	// postal varchar(16) NOT NULL DEFAULT ''::character varying,
	// city varchar(200) NOT NULL DEFAULT ''::character varying,
	// state varchar(200) NOT NULL DEFAULT ''::character varying,
	// telephone varchar(32) NOT NULL DEFAULT ''::character varying,
	// telefax varchar(32) NOT NULL DEFAULT ''::character varying,
	// website varchar(255) NOT NULL DEFAULT ''::character varying,
	// birthday date NULL,
	// status int2 NOT NULL DEFAULT 1,
	// editor varchar(255) NOT NULL DEFAULT ''::character varying,
	// CONSTRAINT unq_lvusr_email UNIQUE (email),
	// CONSTRAINT users_pkey PRIMARY KEY (id)
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
