<?php

class Problem extends Eloquent {

	protected $table = "problems";
	protected $id = "id"; 

	public function createProblem($dsTitle) {

		$problem = new Problem;
		$problem->dsTitle = $dsTitle;
		$problem->save();
	}

	public function editProblem($id, $dsTitle) {
		$problem = Problem::find($id);
		$problem->dsTitle = $dsTitle;
		$problem->save();
	}

	public function deleteProblem($id) {
		$problem = Problem::find($id);
		$problem->delete();
	}
}