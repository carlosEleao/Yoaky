<?php

class Problem extends Eloquent {

	protected $table = "problems";

	public function createProblem($dsTitle) {

		$problem = new Problem;
		$problem->dsTitle = $dsTitle;
		$problem->save();
		return $problem->id;
	}

	public function editProblem($id, $dsTitle) {
		$problem = Problem::find($id);
		$problem->dsTitle = $dsTitle;
		$problem->save();
	}

	public function deleteProblem($id) {
		$problem = Problem::find($id);
		$descriptions = $problem->hasMany('ProblemDescription');
		foreach ($descriptions as $description) {
			 $description->delete();
		}
		$problem->delete();
	}
}