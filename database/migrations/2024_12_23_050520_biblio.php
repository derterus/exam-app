<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('publishers', function (Blueprint $table) {
            $table->id();
            $table->string('country', 100); // Ограничение на длину
            $table->string('address', 255);
            $table->string('registration_number', 50)->unique(); // Уникальность
            $table->string('phone', 15);
            $table->timestamps();
        });

        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('author', 255);
            $table->string('title', 255);
            $table->string('cover')->nullable(); // Обложка может быть необязательной
            $table->integer('pages')->unsigned(); // Только положительные значения
            $table->year('year');
            $table->string('isbn', 13)->unique();
            $table->foreignId('publisher_id')->constrained()->cascadeOnDelete(); // Каскадное удаление
            $table->timestamps();
        });

        Schema::create('readers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 255);
            $table->string('address', 255);
            $table->string('phone', 15);
            $table->timestamps();
        });

        Schema::create('book_loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reader_id')->constrained()->cascadeOnDelete();
            $table->foreignId('book_id')->constrained()->cascadeOnDelete();
            $table->date('issue_date');
            $table->date('return_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_loans');
        Schema::dropIfExists('books');
        Schema::dropIfExists('readers');
        Schema::dropIfExists('publishers');
    }
};
