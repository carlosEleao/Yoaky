<?php

class ProblemDescription extends Eloquent {

	protected $table = "problems_descriptions";

	public function createDecription($idProblem, $idLanguage, $dsTitle, $dsProblem) {

		$problemDescription = new ProblemDescription;
		$problemDescription->problem_id = $idProblem;
		$problemDescription->language_id = $idLanguage;
		$problemDescription->dsTitle = $dsTitle;
		$problemDescription->dsProblem = $dsProblem;
		$problemDescription->save();
		return $problemDescription->id;
	}

	public function editDecription($idDescription, $idProblem, $dsTitle, $dsProblem) {

		$problemDescription = ProblemDescription::find($idDescription);

		$problemDescription->problem_id = $idProblem;
		$problemDescription->dsTitle = $dsTitle;
		$problemDescription->dsProblem = $dsProblem;
		$problemDescription->save();
		return $problemDescription->id;
	}

	public function language()
    {
        return $this->belongsTo('Language', 'language_id');
    }

	
}