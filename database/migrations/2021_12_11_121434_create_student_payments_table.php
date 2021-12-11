<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_payments', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('payment_method')->default(\App\Enums\PaymentMethod::OFFLINE);
            $table->integer('student_id')->nullable();
            $table->integer('my_class_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->integer('session')->nullable();
            $table->integer('amount');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_payments');
    }
}
