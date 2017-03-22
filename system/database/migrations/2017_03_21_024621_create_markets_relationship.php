<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketsRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::drop('chains');
        Schema::drop('chain_store');
        Schema::drop('stores');
        Schema::drop('store_job');
        Schema::drop('jobs');
        Schema::drop('job_remark');
        Schema::drop('remarks');
    }
    
    public function up()
    {
        Schema::create('chains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->int('chain_id');
            $table->int('code')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('status');
            $table->string('done_by');
            $table->string('week');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('remarks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('remark')->nullable();
            $table->string('fail_reason')->nullable();
            $table->timestamps();
        });

        Schema::create('store_job', function(Blueprint $table){
            $table->integer('store_id')->unsigned();
            $table->integer('job_id')->unsigned();

            $table->foreign('store_id')->references('id')->on('stores')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('job_id')->references('id')->on('jobs')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['store_id', 'job_id']);
        });

        Schema::create('job_remark', function(Blueprint $table){
            $table->integer('job_id')->unsigned();
            $table->integer('remark_id')->unsigned();

            $table->foreign('job_id')->references('id')->on('jobs')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('remark_id')->references('id')->on('remarks')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['job_id', 'remark_id']);
        });       



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

}
