<?php

class AdmUser extends Eloquent {

	protected $table = "admin_users";

	public function createUser($name, $email, $login, $password, $type, $active) 
	{
		$AdmUser = new AdmUser;
		$AdmUser->dsName = $name;
		$AdmUser->dsEmail = $email;
		$AdmUser->dsLogin = $login;
		$AdmUser->dsPassword = $password;
		$AdmUser->tpLogin = $type;
		$AdmUser->blActive = ($active == 'true') ? 1 : 0;

		$AdmUser->save();
	}

	public function editUser() 
	{
	}

	public function deleteUser($id) 
	{
		$AdmUser = AdmUser::find($id);

		if($AdmUser != null)
		{
			$AdmUser->delete();
		}
	}

	public function getLoginType($id)
	{
		$AdmUser = AdmUser::find($id);

		switch($AdmUser->tpLogin)
		{
			case 1:
				return "Administrator";
				break;
			case 2:
				return "Moderator";
				break;
			default:
				return "Unknown";
		}
	}

	public function emailExists($email)
	{
		$count = AdmUser::where('dsEmail', '=', $email)->count();
		return $count > 0;
	}

	public function loginExists($login)
	{
		$count = AdmUser::where('dsLogin', '=', $login)->count();
		return $count > 0;	
	}

}