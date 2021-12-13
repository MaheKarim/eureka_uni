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
            $table->string('code')->nullable();
            $table->integer('amount');
            $table->integer('send_number');
            $table->text('description')->nullable();
            $table->tinyInteger('payment_status')->default(\App\Enums\PaymentStatus::PENDING);
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
