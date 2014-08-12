<?php

class AdmProblemController extends BaseController {

	public function index()
	{
		return View::make('admin/problem/list');
	}

}
