<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		/**
		 * Problems table 
		 */
	    Schema::create('problems', function($table)
	    {
	        $table->increments('id');
	    });

	    /**
		 * Create Problems files table
		 */
	    Schema::create('problems_files', function($table)
	    {
	        $table->increments('id');
	        $table->foreign('idProblem')->references('id')->on('problems');
	        $table->string('dsTitle');
	        $table->string('dsPath');
	        $table->integer('tpType');
	    });

	    /**
		 * Create Problems descriptions table
		 */
	    Schema::create('problems_descriptions', function($table)
	    {
	        $table->increments('id');
	        $table->foreign('idProblem')->references('id')->on('problems');
	        $table->string('dsTitle');
	        $table->longText('dsProblem');
	        $table->string('dsLangue');
	    });

		/**
		 * Create Users table
		 */
		Schema::create('users', function($table)
	    {
	        $table->increments('id');
	        $table->string('dsEmail')->unique();
	        $table->string('dsName');
	        $table->string('dsPassword');
	        $table->integer('nrAccess');
	        $table->integer('qtPoints');
	        $table->integer('tpLogin');
	        $table->timestamp('dtCreation');
	        $table->timestamp('dtLastLogin');
	    });

		/**
		 * Create Solutions table
		 */
	    Schema::create('solutions', function($table)
	    {
	        $table->increments('id');
	        $table->foreign('idProblem')->references('id')->on('problems');
	        $table->foreign('idCause')->references('id')->on('causes');
	        $table->foreign('idUser')->references('id')->on('users');
	        $table->string('dsTitle');
	        $table->longText('dsSolution');
	    });

		/**
		 * Create Causes table
		 */
	    Schema::create('causes', function($table)
	    {
	        $table->increments('id');
	        $table->foreign('idProblem')->references('id')->on('problems');
	        $table->foreign('idUser')->references('id')->on('users');
	        $table->string('dsTitle');
	        $table->longText('dsCause');
	    });

		/**
		 * Create Causes Action table
		 */
	    Schema::create('causes_actions', function($table)
	    {
	        $table->increments('id');
	        $table->foreign('idUser')->references('id')->on('users');
	        $table->foreign('idCause')->references('id')->on('causes');
	        $table->integer('tpAction');
	    });

	    /**
		 * Create Solutions Action table
		 */
	    Schema::create('solutions_actions', function($table)
	    {
	        $table->increments('id');
	        $table->foreign('idUser')->references('id')->on('users');
	        $table->foreign('idCause')->references('id')->on('causes');
	        $table->integer('tpAction');
	    });


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('problems');
	    Schema::drop('problems_files');
	    Schema::drop('problems_descriptions');
	    Schema::drop('solutions');
	    Schema::drop('solutions_actions');
	    Schema::drop('causes');
	    Schema::drop('causes_actions');
	    Schema::drop('users');
	}

}
