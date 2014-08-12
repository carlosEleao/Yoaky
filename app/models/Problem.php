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
		$problem = User::find($id);
		$problem->dsTitle = $dsTitle;
		$problem->save();
	}

	public function deleteProblem($id) {
		$problem = User::find($id);
		$problem->delete();
	}
}