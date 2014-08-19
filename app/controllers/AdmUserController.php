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
		$password = Input::get('password');
		$AdmUser = new AdmUser();
		$AdmUser->createUser($name, $email, $password);
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


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}