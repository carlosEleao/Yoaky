// Execute when after HTML is loaded
$(document).ready(function(){
	// Gets all admin users
	getUsers();

	// Sets up form JS
	setupForm();
});

// Gets all admin users and populate table with them
function getUsers()
{
	$.ajax({
        url: '/yoaky/adminUser/getAll',
        type: 'get',
        success : function(data){
    		onSuccessGetUsers(data);
        }
    });
}

// Creates a new admin user
function createUser()
{
	var fields = {
		name : $('input[name="name"]').val(),
		email : $('input[name="email"]').val(),
		login : $('input[name="login"]').val(),
		password : $('input[name="password"]').val(),
		type : $('input[name="type"]').val(),
		active : $('input[name="status"]').is(':checked')
	}

	$.ajax({
        url: '/yoaky/adminUser/add',
        type: 'post',
        data: fields,
        success : function(){
    		onSuccessUserCreated();
        }
    });
}

// Deletes an existing admin user
function deleteUser(userId)
{
	$.ajax({
        url: '/yoaky/adminUser/delete/' + userId,
        type: 'post',
        success : function(){
    		onSuccessDeleted();
        }
    });
}

// Called when user is created successfully
function onSuccessUserCreated(){
	$('.ui.modal').modal('hide');
	var message = new AdminTopMessage();
	message.displaySuccess('Administrator created successfully!');
	message = null;

	// Gets all users
	getUsers();
}

// Called when admin user is deleted successfully
function onSuccessDeleted(){
	var message = new AdminTopMessage();
	message.displaySuccess('Administrator deleted successfully!');
	message = null;

	// Gets all users
	getUsers();
}

// Called when get all users successfully
function onSuccessGetUsers(users){

	$('table tbody').empty();

	for(i = 0; i < users.length; i++){
		var active = '<i class="red icon close"></i>';
		if (users[i]['blActive'] == 1)
		  active = '<i class="green icon checkmark"></i>';

		var loginType = 'Administrator';
		if (users[i]['tpLogin'] == 2)
		  loginType = 'Moderator';

		$('table tbody').append(
			'<tr id="'+users[i]['id']+'">' +
	          '<td>'+ users[i]['id'] +'</td>' +
	          '<td>'+ users[i]['dsLogin'] +'</td>' +
	          '<td>'+ loginType +'</td>' +
	          '<td style="padding-left: 20px">' + active + '</td>' +
	          '<td>' +
	            '<a href="#" class="bt-del-user">' +
	              '<div class="ui mini red button">Delete</div>' +
	            '</a>' +
	          '</td>' +
	        '</tr>'
	    );
	}

	// Applies delete button click function
	$('.bt-del-user').click(function(){
		var currentTr = $(this).closest('tr');
		var userId = currentTr.attr('id');
		deleteUser(userId);
	});
}


// Validates if the given email already exists or not
function validateEmail(email){
	if(email != null){
		var data = { 'email' : email };

		$.ajax({
	        url: '/yoaky/adminUser/emailexists',
	        type: 'post',
	        data: data,
	        success : function(data){
	        	if(data['email_exists']){
	        		$('#user-exists').removeClass('hidden');
	        		canSubmit = false;
	        	} else {
	        		$('#user-exists').addClass('hidden');
	        		canSubmit = true;
	        	}
	        }
	    });
	}
}

// Validates if the given login already exists or not
function validateLogin(login){
	if(login != null){
		var data = { 'login' : login };

		$.ajax({
	        url: '/yoaky/adminUser/loginexists',
	        type: 'post',
	        data: data,
	        success : function(data){
	        	
	        	if(data['login_exists']){
	        		$('#login-exists').removeClass('hidden');
	        		canSubmit = false;
	        	} else {
	        		$('#login-exists').addClass('hidden');
	        		canSubmit = true;
	        	}
	        }
	    });
	}
}

// Modal add user
var canSubmit = true;

// Setups add admin user form
function setupForm(){
	setupFormValidations();
	setupFormControls();
}

// Setups form controls events
function setupFormControls(){
	$('.ui.selection.dropdown').dropdown();

	$('.ui.checkbox').checkbox();

	$('#bt-add-user').click(function(){
		$('.ui.modal').modal('show');
	});

	$('#bt-cancel').click(function(){
		$('.ui.modal').modal('hide');
	});
}

// Setups form field validations
function setupFormValidations(){
	var validations = {
	    name: {
	      identifier: 'name',
	      rules: [{ type: 'empty', prompt: 'Please enter your name'}],
	    },
	    email: {
	      identifier: 'email',
	      rules: [{ type: 'empty', prompt: 'Please enter your email'}, {type: 'email', prompt: 'Please enter a valid email'}],
	    },
	    login: {
	      identifier: 'login',
	      rules: [{ type: 'empty', prompt: 'Please enter your login'}],
	    },
	    password: {
	      identifier: 'password',
	      rules: [{ type: 'empty', prompt: 'Please enter your password'}],
	    },
	    type: {
	      identifier: 'type',
	      rules: [{ type: 'empty', prompt: 'Please select user type'}],
	    }
	  };


	$('.ui.form').form(
	  	validations,
		{
		  inline:true,
		  on: 'submit',
		  onSuccess : function(event){
		  	if(canSubmit)
		  		createUser();
		  }
		}
	);

	$('input[name="email"]').focusout(function(){
		validateEmail($(this).val());
	});

	$('input[name="login"]').focusout(function(){
		validateLogin($(this).val());
	});
}