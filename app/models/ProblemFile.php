<?php

class ProblemFile extends Eloquent {

	protected $table = "problems_files";
	
	public function createFile($idProblem, $dsTitle, $dsPath, $tpType) {
		$file = new ProblemFile;
		$file->problem_id = $idProblem;
		$file->dsTitle = $dsTitle;
		$file->dsPath = $dsPath;
		$file->tpType = $tpType;
		$file->save();
		return $file->id;
	}

	public function deleteFile($idFile) {
		$file = new ProblemFile;
		$file->id = $idFile;
		$file->delete();
	}
	
}

class Type
{	
	// When create new types of file put it here	
	const Image = 1;    
	const File = 2;    
}		