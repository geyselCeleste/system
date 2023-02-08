<?php 
	// session_start();
	
	// $duration = 1500;
	
	//Read the request time of the user
	
	// $time = $_SERVER['REQUEST_TIME'];
	
	//Check the user's session exist or not
	
	// if (isset($_SESSION['LAST_ACTIVITY']) &&
	
	//    ($time - $_SESSION['LAST_ACTIVITY']) > $duration) {
	
		//Unset the session variables
	
		// session_unset();
	
		//Destroy the session
	
		// session_destroy();
	
		//Start another new session
	
		// session_start();

	}

	
	// $_SESSION['LAST_ACTIVITY'] = $time;



	// flash message helper
	// example - flash('register_success', 'you are now registered');
	//  display in view - echo flash('register_success');
	// function flash($name = '', $message = '', $class = 'alert alert-success'){
	// 	if (!empty($name)) {
	// 		if(!empty($message) && empty($_SESSION[$name])){
	// 			if(!empty($_SESSION[$name])){
	// 				unset($_SESSION[$name]);
	// 			}

	// 			if(!empty($_SESSION[$name. '_class'])){
	// 				unset($_SESSION[$name. '_class']);
	// 			}

	// 			$_SESSION[$name] = $message;
	// 			$_SESSION[$name. '_class'] = $class;

	// 		} elseif (empty($message) && !empty($_SESSION[$name])){
				// se crea la variable $class como una condicion usando ? y :
	// 			$class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name. '_class'] : '';
	// 			echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
				
	// 			unset($_SESSION[$name]);
	// 			unset($_SESSION[$name . '_class']);
	// 		}
	// 	}
	// }

	// function isLoggedIn(){
	// 	if (isset($_SESSION['user_perfil'])) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }


?>