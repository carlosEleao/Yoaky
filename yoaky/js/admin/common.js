function AdminTopMessage()
{
	this.successClassColor = 'green';
	this.failureClassColor = 'red';
	this.hiddenClass = 'hidden';
	this.message = $('.ui.message');
}

AdminTopMessage.prototype.display = function(classToAdd, message)
{
	this.message.find('p').empty();
	this.message.addClass(classToAdd);
	this.message.find('p').append(message);
	this.message.removeClass(this.hiddenClass);
}

AdminTopMessage.prototype.displaySuccess = function(message)
{
	this.display(this.successClassColor, message);
}

AdminTopMessage.prototype.displayFailure = function(message)
{
	this.display(this.failureClassColor, message);
}