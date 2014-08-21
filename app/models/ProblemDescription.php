<?php

class ProblemDescription extends Eloquent {

	protected $table = "problems_descriptions";

	public function createDecription($idProblem, $idLanguage, $dsTitle, $dsProblem) {

		$problemDescription = new ProblemDescription;
		$problemDescription->idProblem = $idProblem;
		$problemDescription->idLanguage = $idLanguage;
		$problemDescription->dsTitle = $dsTitle;
		$problemDescription->dsProblem = $dsProblem;
		$problemDescription->save();
		return $problemDescription->id;
	}

	
}