<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->string('TenderNo')->unique();
            $table->string('Name');
            $table->text('Description')->nullable();
            $table->string('Type');
            $table->integer('Category');
            $table->double('Ammount', 8, 2);
            $table->string('AttachmentPath')->nullable();
            $table->string('AttachementName')->default('File not found');
            $table->integer('Status')->default('0');
            $table->string('ClosedDate');
            $table->string('Author')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenders');
    }
};
