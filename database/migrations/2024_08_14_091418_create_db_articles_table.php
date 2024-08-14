<?php

use App\Models\db_brand;
use App\Models\db_category;
use App\Models\db_gender;
use App\Models\db_section;
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
        Schema::create('db_articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->string('image')->nullable();
            $table->foreignIdFor(db_brand::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(db_gender::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(db_category::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(db_section::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_articles');
    }
};
