<?php
// Include config file
require_once('C:\xampp\htdocs\off_campus_project\backend\Controller\Controller.php');

  class Logout extends Controller {

    /**
      * @param null|void
      * @return null|void
      * @desc Destroys the application session and redirects to the login page...
    **/
    public function __construct()
    {
      session_destroy();
      header("Location: index.php");
    }
  }
 ?>
