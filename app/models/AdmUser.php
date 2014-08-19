<?php

class AdmUser extends Eloquent {

	protected $table = "admin_users";
	protected $id = "id"; 

	public function createUser($name, $email, $password) {
		$AdmUser = new AdmUser;
		$AdmUser->dsName = $name;
		$AdmUser->dsEmail = $email;
		$AdmUser->dsPassword = $password;
		$AdmUser->save();
	}

	public function editUser() {
	}

	public function deleteUser() {
	}
}