<?php
       $login = false;
     
   	 session_start();

       $_SESSION['callback_URL'] = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];

       if (isset($_SESSION['user'])) {
	         $login = true;
        } 

?>
