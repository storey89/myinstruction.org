<?php
	$errors = '';
	$myemail = 'info@myinstruction.org';//<-----Put Your email address here.
		if(empty($_POST['name'])  || 
   			empty($_POST['email']) || 
   			empty($_POST['message']))
			{
    			$errors .= "\n Error: all fields are required";
			}

			$name = $_POST['name']; 
			$email_address = $_POST['email']; 
			$message = $_POST['message']; 

			if (!preg_match(
			"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
			$email_address))
			{
			    $errors .= "\n Error: Invalid email address";
			}
?>


	/*function IsInjected($str)
	{
	    $injections = array('(\n+)',
	           '(\r+)',
	           '(\t+)',
	           '(%0A+)',
	           '(%0D+)',
	           '(%08+)',
	           '(%09+)'
	           );
	               
	    $inject = join('|', $injections);
	    $inject = "/$inject/i";
	    
	    if(preg_match($inject,$str))
	    {
	      return true;
	    }
	    else
	    {
	      return false;
	    }
	}

	if(IsInjected($visitor_email))
	{
	    echo "Bad email value!";
	    exit;
	}*/


