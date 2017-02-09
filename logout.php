<?php

	session_start();
	
	/** If the session isn't set, redirect to index.php */
	if (!isset($_SESSION['user'])) {

		header("Location: index.php");

	/** otherwise redirect to home.php */
	} else if(isset($_SESSION['user'])!="") {

		header("Location: product.php");

	}

	/** If the user is logging out, */
	if (isset($_GET['logout'])) {

		/** unregister the user session variable */
		unset($_SESSION['login_user']);

		/** free all currently registered session variables */
		session_unset();

		/** and destroy all data associated with the current session */
		session_destroy();
		
		exit;
	}