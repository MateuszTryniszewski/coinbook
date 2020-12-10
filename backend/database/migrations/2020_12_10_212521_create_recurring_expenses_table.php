<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurringExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurring_expenses', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('subtitle', 100);
            $table->decimal('amount', 8, 2);
            $table->boolean('mark_as_paid');
            $table->boolean('accumulate');
            $table->boolean('duplicate_every_month');
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('category_id')->constrained('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurring_expenses');
    }
}
