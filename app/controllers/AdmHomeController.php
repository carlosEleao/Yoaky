<?php

class AdmHomeController extends BaseController {


	public function index()
	{
		return View::make('admin/index/index', array('home_active' => 'active', 'problem_active' => '', 'submitted_problem_active' => '', 'user_active' => ''));
	}

}
