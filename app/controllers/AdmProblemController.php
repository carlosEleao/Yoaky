<?php

class AdmProblemController extends BaseController {

	public function index()
	{

		return View::make('admin/problem/list');
	}

	public function create()
	{
		return View::make('admin/problem/create');
	}

	public function update($id)
	{
		return View::make('admin/problem/update', array("id"=>$id));
	}

	public function add()
	{
		$dsName = Input::get('name');
		$Problem = new Problem();

		$idProblem = $Problem->createProblem($dsName);

		$dsTitle = Input::get('title');
		$idLanguage = Input::get('language');
		$dsDescription = Input::get('description');

		if (Input::hasFile('image'))
		{
    		$File = new ProblemFile();
    		$dsPath = FileUtils::getImagePath($idProblem).FileUtils::getImageName();
    		$idFile = $File->createFile($idProblem, $dsName, $dsPath, Type::Image);
    		FileUtils::saveImage($dsPath, Input::file('image')->getRealPath());
		}else {
			die("não veio o arquivo");
		}

		foreach ($dsTitle as $key => $value) {
			$ProblemDescription = new ProblemDescription();
			$ProblemDescription->createDecription($idProblem, $idLanguage[$key], $dsTitle[$key], $dsDescription[$key]);
		}
		
		return Redirect::to('adminProblem');
	}

	public function edit($id)
	{
		$dsName = Input::get('name');
		$Problem = new Problem();

		$Problem->editProblem($id,$dsName);

		$dsTitle = Input::get('title');
		$idDescription = Input::get('idDescription');
		$dsDescription = Input::get('description');

		foreach ($dsTitle as $key => $value) {
			$ProblemDescription = new ProblemDescription();
			$ProblemDescription->editDecription($idDescription[$key], $id, $dsTitle[$key], $dsDescription[$key]);
		}
		
		return Redirect::to('adminProblem');
	}

	public function delete($id) 
	{
		$Problem = new Problem();
		$Problem->deleteProblem($id);

		return Redirect::to('adminProblem');
	}
}
