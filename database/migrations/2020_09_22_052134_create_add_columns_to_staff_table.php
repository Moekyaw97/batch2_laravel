<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddColumnsToStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_columns_to_staff', function (Blueprint $table) {
             $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('position_id');

            // Relationship
            $table->foreign('department_id')
                    ->references('id')
                    ->on('departments')
                    ->onDelete('cascade');

            $table->foreign('position_id')
                    ->references('id')
                    ->on('positions')
                    ->onDelete('cascade'); 
                    // if delete parent, will delete related child
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_columns_to_staff');
    }
}
