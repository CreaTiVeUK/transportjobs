<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('JobStatus', 9)->default('Pending');
            $table->integer('NoOfVehicles');
            $table->decimal('DrivenPrice', 10, 2)->nullable();
            $table->decimal('TransportedPrice', 10, 2)->nullable();
            $table->date('CollectionDate')->nullable();
            $table->date('DeliveryDate')->nullable();
            $table->string('ServiceType', 11)->default('Pending');
            $table->date('RequestDate')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
