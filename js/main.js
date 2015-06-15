<script>
$(document).ready(function() {
	$('.pannelData').toggle();
	$('.comp-2').toggle();
	$('.comp-3').toggle();
	$('.comp-4').toggle();
	
	$('.panel').click(function() {
		$(this).parent().children().closest('.pannelData').toggle();
	});
	$('.title').click(function()
	{
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
});
</script>