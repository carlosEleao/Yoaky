<?php

class AdmUserController extends BaseController {

	public function index()
	{
		return View::make('admin/user/list');
	}

	public function getAll()
	{
		$AdmUser = AdmUser::select('id','dsName','dsEmail','dsLogin','tpLogin','blActive')->get();
		return Response::json($AdmUser);
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

	public function delete($id)
	{
		$AdmUser = new AdmUser();
		$AdmUser->deleteUser($id);
	}

	public function emailexists()
	{
		$email = $_POST["email"];
		
		$AdmUser = new AdmUser();
		return Response::json(array('email_exists' => $AdmUser->emailExists($email)));
	}

	public function loginexists()
	{
		$login = $_POST["login"];
		
		$AdmUser = new AdmUser();
		return Response::json(array('login_exists' => $AdmUser->loginExists($login)));
	}

}