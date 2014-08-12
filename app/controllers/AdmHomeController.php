<?php

class AdmHomeController extends BaseController {


	public function index()
	{
		return View::make('admin/index/index');
	}

}
