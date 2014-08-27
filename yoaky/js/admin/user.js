// Modal add user

$(document).ready(function(){

	$('.ui.selection.dropdown').dropdown();

	$('.ui.checkbox').checkbox();

	$('#bt-add-user').click(function(){
		$('.ui .modal').modal('show');
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
		  on: 'blue'
		}
	);

});