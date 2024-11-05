<?php

use App\Models\Task;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();

            $table->string('description')->nullable();
            $table->boolean('is_pinned')->default(false);
            $table->dateTime('completed_at')->nullable();
            $table->date('start_date')->nullable();
            $table->date('due_date')->nullable();
            $table->softDeletes();
            $table->foreignId('parent_id')->nullable()->constrained('tasks')->onDelete('cascade'); // Self-referential foreign key
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
