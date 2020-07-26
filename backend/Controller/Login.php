<?php
    // Include config file
    require_once('C:\xampp\htdocs\off_campus_project\backend\Controller\Controller.php');
    require_once('C:\xampp\htdocs\off_campus_project\backend\Framework\LandlordsFramework.php');
 ?>

 <?php

/**
 *
 */
class Login extends Controller
{
    public $active = 'login'; //for highlighting the active link...
    private $landlords;


    /**
    * @param null|void
    * @return null|void
    * @desc Checks if the user session is set and creates a new instance of the landlordsFrameworkl...
    **/
    public function __construct()
    {
        if (isset($_SESSION['auth_status'])) header("Location: landlord_login.html");
        $this->landlords = new Landlords();
    }



    /**
    * @param array
    * @return array|boolean
    * @desc Verifies and redirects a user by calling the login method on the LoginModel...
    **/
    public function login(array $data)
    {
        $email = $this->test_input($data['login_email']);
        $password = $this->test_input($data['login_passwd']);

        $EmailRecords = $this->landlords->fetchEmail($email);

        if (!$EmailRecords['status'])
        {
            if (password_verify($password, $EmailRecords['data']['Landlord_Passwd']))
            {
                //check if the remember_me was selected...
                $Response = array( 'status' => true );

                $_SESSION['data'] = $EmailRecords['data'];
                $_SESSION['auth_status'] = true;
                header("Location: landlord_login.html");
            }

            $Response = array('status' => false );

            return $Response;
        }

        $Response = array('status' => false );

        return $Response;
    }


    /**
    * @param array
    * @return array|boolean
    * @desc Verifies and redirects a user by calling the login method on the LoginModel...
    **/
    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);

        return $data;
    }


} // end Login class


?>
