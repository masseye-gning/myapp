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
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->string(column: 'title');

            //$table->unsignedBigInteger(column: 'user_id');

            //$table->foreign(columns: 'user_id')->references(columns: 'id')->on('users');

            $table->foreignIdFor(model:\App\Models\User::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
