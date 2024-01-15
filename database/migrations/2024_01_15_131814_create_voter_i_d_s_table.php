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
        Schema::create('voter_i_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('register_id');
            $table->string('firstName');
            $table->string('lastName');
            $table->bigInteger('mobile');
            $table->string('email')->unique();
            $table->date('dob');
            $table->longText('address');
            $table->text('taluk');
            $table->text('district');
            $table->text('state');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voter_i_d_s');
    }
};
