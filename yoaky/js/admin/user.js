// Modal add user

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
        url: "/yoaky/adminUser/add",
        type: "post",
        data: fields,
        success : function(){
    		onSuccessUserCreated();
        }
    });
}

function deleteUser(userId)
{
	$.ajax({
        url: "/yoaky/adminUser/delete/" + userId,
        type: "post",
        success : function(){
    		onSuccessDeleted();
        }
    });
}

function onSuccessUserCreated(){
	$('.ui.modal').modal('hide');
	var message = new AdminTopMessage();
	message.displaySuccess('Administrator created successfully!');
	message = null;
}

function onSuccessDeleted(){
	var message = new AdminTopMessage();
	message.displayFailure('Administrator deleted successfully!');
	message = null;
}

function validateEmail(email)
{
	Alert(email);
}

$(document).ready(function(){

	$('.ui.selection.dropdown').dropdown();

	$('.ui.checkbox').checkbox();

	$('#bt-add-user').click(function(){
		$('.ui.modal').modal('show');
	});

	$('.bt-del-user').click(function(){
		var currentTr = $(this).closest('tr');
		var userId = currentTr.attr('id');
		currentTr.remove();
		deleteUser(userId);
	});

	var validations = {
	    name: {
	      identifier: 'name',
	      rules: [
	        {
	          type: 'empty',
	          prompt: 'Please enter your name'
	        }
	      ],
	    },
	    email: {
	      identifier: 'email',
	      rules: [
	        {
	          type: 'empty',
	          prompt: 'Please enter your email'
	        }
	      ],
	    },
	    login: {
	      identifier: 'login',
	      rules: [
	        {
	          type: 'empty',
	          prompt: 'Please enter your login'
	        }
	      ],
	    },
	    password: {
	      identifier: 'password',
	      rules: [
	        {
	          type: 'empty',
	          prompt: 'Please enter your password'
	        }
	      ],
	    },
	    type: {
	      identifier: 'type',
	      rules: [
	        {
	          type: 'empty',
	          prompt: 'Please select user type'
	        }
	      ],
	    }
	  };


	$('.ui.form').form(
	  	validations,
		{
		  inline:true,
		  on: 'blue',
		  onSuccess : function(event){
		  	createUser();
		  }
		}
	);

	$('input[name="email"]').focusout(function(){
		
	});
});