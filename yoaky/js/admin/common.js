// Execute when after HTML is loaded
$(document).ready(function(){
	// Handles message close button
	$('.message .close').on('click', function() {
	  $(this).closest('.message').fadeOut();
	});
});

// Class to user for displaying admin top message
function AdminTopMessage()
{
	this.successClassColor = 'green';
	this.successHeader = 'Success';
	this.failureClassColor = 'red';
	this.failureHeader = 'Oops, something went wrong';
	this.message = $('.ui.message');
}

// Display admin top message considering message type
AdminTopMessage.prototype.display = function(classToAdd, title, message)
{
	// Clears all current information
	this.message.find('p').empty();
	this.message.find('.header').empty();
	this.message.removeClass(this.successClassColor);
	this.message.removeClass(this.failureClassColor);

	this.message.addClass(classToAdd);
	this.message.find('.header').append(title);
	this.message.find('p').append(message);
	this.message.fadeIn();
}

// Display admin top success message
AdminTopMessage.prototype.displaySuccess = function(message)
{
	this.display(this.successClassColor, this.successHeader, message);
}

// Display admin top failure message
AdminTopMessage.prototype.displayFailure = function(message)
{
	this.display(this.failureClassColor, this.failureHeader, message);
}