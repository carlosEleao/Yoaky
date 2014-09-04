<?php

class AdmUserController extends BaseController {

	public function index()
	{
		return View::make('admin/user/list');
	}

	public function create()
	{
		return View::make('admin/user/create');
	}

	public function add()
	{
		$name = Input::get('name');
		$email = Input::get('email');
		$login = Input::get('login');
		$password = Input::get('password');
		$type = Input::get('type');
		$active = Input::get('active');
		$AdmUser = new AdmUser();

		$AdmUser->createUser($name, $email, $login, $password, $type, $active);
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function delete($id)
	{
		$AdmUser = new AdmUser();
		$AdmUser->deleteUser($id);
	}


}