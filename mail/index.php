<!DOCTYPE html>
<html>
<head>
    <title>Send an Email</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="icon" 
      type="image/png" 
      href="maill.jpg" />
</head>
<body>

	<center>
		<h4 class="sent-notification"></h4>

		<form id="myForm" style="width: 500px; border:2px solid grey; padding: 50px;">
			<h2>Send an Email</h2>
            <br><br>
	
			<input id="name" type="text" placeholder="Enter Name" class="form-control">
			<br><br>

	
			<input id="email" type="text" placeholder="Enter Email" class="form-control">
			<br><br>

			
			<input id="subject" type="text" placeholder=" Enter Subject" class="form-control"> 
			<br><br>

		
			<textarea id="body" rows="5" placeholder="Type Message" class="form-control"></textarea>
			<br><br>

			<button type="button" class="btn  btn-info" onclick="sendEmail()" value="Send An Email">Submit</button> 
		</form>
	</center>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>