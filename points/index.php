<?php
	if($_SERVER["HTTPS"] != "on")
	{
		header("Location: https://brpb.rankz.org");
	}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="google-signin-scope" content="profile email">
	    <meta name="google-signin-client_id" content="428252312756-djr3h6is5c0s8lfr5ev3pr1567rnnjat.apps.googleusercontent.com">
	    <script src="https://apis.google.com/js/platform.js" async defer></script>
		

	</head>
	<body>
		<h1>Big Red Pep Band</h1>
		<h2>Online Portal</h2>

		<!--form action="login.php">
			
			<input type="submit" text="LOGIN"/>
		</form-->

		
		<div class="g-signin2" data-onsuccess="onSignIn" data-theme="light"></div>

		<form action="login.php" method="POST">
			<input type="hidden" name="id_token" id='id_token' />
			<input type="submit" disabled id='submit' />
		</form>

	    <script>
	      function onSignIn(googleUser) {
	        // Useful data for your client-side scripts:
	        // var profile = googleUser.getBasicProfile();
	        //console.log("ID: " + profile.getId()); // Don't send this directly to your server!
	        //console.log('Full Name: ' + profile.getName());
	        //console.log('Given Name: ' + profile.getGivenName());
	        //console.log('Family Name: ' + profile.getFamilyName());
	        //console.log("Image URL: " + profile.getImageUrl());
	        //console.log("Email: " + profile.getEmail());

	        // The ID token you need to pass to your backend:
	        var id_token = googleUser.getAuthResponse().id_token;
	        document.getElementById('id_token').value = id_token;
	        document.getElementById('submit').removeAttribute("disabled");
	        //console.log("ID Token: " + id_token);
	      }
	    </script>


	</body>
</html>