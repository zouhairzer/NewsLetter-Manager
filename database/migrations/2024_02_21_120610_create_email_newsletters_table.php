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
        Schema::create('email_newsletters', function (Blueprint $table) {
            $table->unsignedBigInteger('email_id');
            $table->unsignedBigInteger('newsletter_id');
            $table->foreign('email_id')->references('id')->on('mails')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('newsletter_id')->references('id')->on('newsletters')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['email_id', 'newsletter_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_newsletters');
    }
};
