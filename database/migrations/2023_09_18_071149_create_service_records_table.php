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
        Schema::create('service_records', function (Blueprint $table) {
            $table->id();
            $table->date('date_from');
            $table->date('date_to')->nullable();
            $table->unsignedBigInteger('employee_id');
            $table->string('position');
            $table->decimal('salary', 10, 2);
            $table->timestamps();

         
            $table->foreign('employee_id')
                ->references('id')
                ->on('employees')
                ->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_records');
    }
};
