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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('acronym');
            $table->text('name');
            $table->string('country');
            $table->string('city');
            $table->text('address');
            $table->string('website_link');
            $table->string('email_address');
            $table->string('contact1');
            $table->string('contact2');
            $table->integer('total_students');
            $table->string('integration_percentage');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
