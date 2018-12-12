<?php 

		ob_start();
		require 'db_con.php';

		$login_error = FALSE;
		$username_error = FALSE;
		$random_error = FALSE;
		$flag_error = FALSE;
		
		if(!isset($_SESSION)) 
			{ 
				session_start(); 
			}
			
		if (!$conn) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}
				
		if (isset($_POST['username']))
		{
			$username = stripslashes($_REQUEST['username']);
			$username = mysqli_real_escape_string($conn,$username); 
			
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($conn,$password);
			
			$query = "SELECT * FROM `users` WHERE user_name='$username'
							and user_password='".md5($password)."'";
							
							
			$result = mysqli_query($conn,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			
				if($rows==1)
				{
					$_SESSION['username'] = $username;
					?>
						<script> location.replace("account.php"); </script>
					<?php
				
				}
				else 
				{
					
					$login_error = TRUE;

				}
		}
		
		
			if($login_error)
			{
				?>

				
				<div style="margin-top:6%" class="alert alert-danger text-center" role="alert">
						try again
					</div>

					
					
				<?php
			
			
			}
			
			else if($username_error)
			{
			
				?>

				<div style="margin-top:6%" class="alert alert-danger text-center" role="alert">
						username is already in use
					</div>
					
				<?php
			
			
			
			}
			
			else if($flag_error)
			{
			
				?>

				<div style="margin-top:6%" class="alert alert-danger text-center" role="alert">
						check your passwords
					</div>

				
					
				<?php
			
			
			}
			
			else
			{
		
			}
		?>