<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuedVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('issued_vouchers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_reg_id')->constrained('registered_students')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name', 400);
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issued_vouchers');
    }
}
