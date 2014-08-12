<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();


		/**
		 * Problems table 
		 */
	    Schema::create('problems', function($table)
	    {
	        $table->increments('id');
	        $table->string('dsTitle');
	       	$table->timestamp('dtCreation');
	        $table->timestamp('dtLastUpdate');
	    });


	    /**
		 * Create Problems files table
		 */
	    Schema::create('problems_files', function($table)
	    {
	        $table->increments('id');
	        $table->integer('idProblem')->foreign('idProblem')->references('id')->on('problems');
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
	        $table->integer('idProblem')->foreign('idProblem')->references('id')->on('problems');
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

	}

}
