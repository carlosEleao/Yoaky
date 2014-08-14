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

	public function add()
	{
		$name = Input::get('name');
		$category = Input::get('category');
		$Problem = new Problem();
		$Problem->createProblem($name);
	}
}
