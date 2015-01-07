<!DOCTYPE HTML>
<html> 
<head>
	<title>Example Website</title>  
	<meta charset="utf-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="shortcut icon" href="favicon.ico" >
	<link rel="stylesheet" href="style/pietervanos.css" />
	<link rel="stylesheet" href="style/pietervanos.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile.structure-1.3.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
	<script type="text/javascript">
		//google analytics//
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-6021558-12']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); 
			ga.type = 'text/javascript'; 
			ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; 
		        s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>
<body>
	<div id="home" data-role="page" class="type-interior" data-theme="a">
		<div data-role="header" data-theme="a">
			<div class="center-image"><h1>Example jQuery Mobile Webpage</h1></div>
		</div>
		<br />
		<div class="center-image"><img src="style/images/logo.png" style="width:100%"></img></div>
		<div data-role="content" data-theme="a">
				<a href="#contactform" type="button" data-theme="a" data-transition="slide">Contact Form</a>
			<br />
		</div>
		<div data-role="footer">
			<div class="center-image"><h4><a href="http://www.pietervanos.net" data-theme="a" data-inline="true" style="color:white;" TARGET="_blank">Visit here our desktop webpage</a>
			<a href="http://www.pietervanos.net" class="madeby" target="_blank"><img src="pietervanos.png" class="ui-btn-right" alt="Made By Pieter" /></a></h4></div>
			
		</div>
	</div>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="a">
		<div data-role="header">
			<h1>Contact Form</h1>
			<a data-icon="home" data-rel="back" style="margin-top:2px;">Home</a>
		</div>
		<div data-role="content" data-theme="a">	
		<form method="post" action="mail.php" data-ajax="false">
		  Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
		  E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
		  Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
		  Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
		  Message:<br>
		  <textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
		  <input type="submit" value="Send" name="submit" class="btn">
		 </form>
		</div>
		<div data-role="footer">
			<div class="center-image"><h4><a href="http://www.pietervanos.net" data-theme="a" data-inline="true" style="color:white;" TARGET="_blank">Visit here our desktop webpage</a>
			<a href="http://www.pietervanos.net" class="madeby" target="_blank"><img src="pietervanos.png" class="ui-btn-right" alt="Made By Pieter" /></a></h4></div>
			
		</div>
	</div>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="a">
		<div data-role="header">
			<h1>Sent Succesful</h1>
			<a data-icon="home" data-rel="back" style="margin-top:2px;">Home</a>
		</div>
		<div data-role="content" data-theme="a">	
		 <p>The contact form was sent succesful!</p>
		 </form>
		</div>
		<div data-role="footer">
			<div class="center-image"><h4><a href="http://www.pietervanos.net" data-theme="a" data-inline="true" style="color:white;" TARGET="_blank">Visit here our desktop webpage</a>
			<a href="http://www.pietervanos.net" class="madeby" target="_blank"><img src="pietervanos.png" class="ui-btn-right" alt="Made By Pieter" /></a></h4></div>
			
		</div>
	</div>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-theme="a">
		<div data-role="header">
			<h1>Error</h1>
			<a data-icon="home" data-rel="back" style="margin-top:2px;">Home</a>
		</div>
		<div data-role="content" data-theme="a">	
			<p>The contact form was sent because of an error!</p>
		</div>
		<div data-role="footer">
			<div class="center-image"><h4><a href="http://www.pietervanos.net" data-theme="a" data-inline="true" style="color:white;" TARGET="_blank">Visit here our desktop webpage</a>
			<a href="http://www.pietervanos.net" class="madeby" target="_blank"><img src="pietervanos.png" class="ui-btn-right" alt="Made By Pieter" /></a></h4></div>
			
		</div>
	</div>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->	
</body>
</html>
