$(document).ready(function() {
	$('.pannelData').toggle();
	$('.comp-2').toggle();
	$('.comp-3').toggle();
	$('.comp-4').toggle();

	$('.panel').click(function() {
		$(this).parent().children().closest('.pannelData').toggle();
	});
	$('.title').click(function() {
		$(this).parent().children().closest('form').toggle();
	});
	$('.userTitle').click(function() {
		$(this).parent().children().closest('form').toggle();
	});
	$('.cnav').click(function() 	{

		var id = $(this).attr('id');

		$(this).toggleClass("active");
		$('.comp-'+id).toggle();

	});
	$('#contactus input[name=Csend]').click(function() {
		var emailData = $('#contactus input[name=Cemail]').val();
		var nameData = $('#contactus input[name=Cname]').val();
		var messageData = $('#contactus input[name=Cname]').val();

		if(emailData === "" || nameData === "" || messageData === "") {
		 //return false;
		}
		else {
		$.post("contact.php", { email: emailData, name: nameData, message: messageData});
		$('.success').toggle();
		}
	});
	$('#qaForm input[name=QAsend]').click(function() {
		var empty = false;
		$('#qaForm :input').each(function() {
			if($(this).val() === "")	{
				empty = true;
			}
		});
		if(empty) {
			// fail
		}
		else {
			$.post("qa.php", $('#qaForm').serialize() );
			$('.successQA').toggle();
		}
	});

	loginBox = $('#login-form').dialog({
		autoOpen: false,
		height: 300,
		width: 350,
		modal: true,
		buttons: {
			"Login": loginUser
		},

	});

	registerBox = $('#register-form').dialog({
		autoOpen: false,
		height: 350,
		width: 450,
		modal: true,
		buttons: {
			"Register": registerUser,
		},
		my: "center",
         at: "center",
         of: window
	});

	$('#addConvention').on('click', function()
	{
			var formData = $('#AddConventionForm').serializeArray();
			formData.push({name: 'type', value: 'add'});
			console.log(formData);
			var dataPost = $.post('classes/conventionFunctions.php', formData, function(data)
			{
				console.log(data);
			});
	});
	$('#addCompetition').on('click', function()
	{
			var formData = $('#AddCompetitionForm').serializeArray();
			formData.push({name:'type', value: 'add'});
			var dataPost = $.post('classes/competitionFunctions.php', formData, function(data)
			{
				console.log(data);
			});
	});
	$('#login').on('click', function()
	{
		event.preventDefault();
		registerBox.dialog("close");
		loginBox.dialog("open");
	});
	$('#register').on('click', function()
	{
		event.preventDefault();
		loginBox.dialog("close");
		registerBox.dialog("open");
	});
	$('.ui-button-text').each(function(i){
				$(this).html($(this).parent().attr('text'))
			})
});



function registerUser()
{
	$('.ui-button-text').on('click', function() {
		var formData = $('#registerForm').serializeArray();
		formData.push({name: 'type', value: 'register'});

		var dataPost = $.post('classes/login.php', formData ,function (data)
		{

		});
	});
};
function loginUser()
{
		$('.ui-button-text').on('click', function() {
		var formData = $('#loginForm').serializeArray();
		formData.push({name: 'type', value: 'login'});
		var dataPost = $.post("classes/login.php", formData, function (data)
		{
					console.log(data);
		});
	});
}
