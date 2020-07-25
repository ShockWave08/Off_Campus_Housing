<?php
// Include config file
require_once('C:\xampp\htdocs\off_campus_project\backend\Controller\Controller.php');
require_once('C:\xampp\htdocs\off_campus_project\backend/Framework/LandlordsFramework.php');
 ?>


 <?php

    /**
     *
     */
class Register extends Controller
{

    private $register;

    /**
    * @param null|void
    * @return null|void
    * @desc Checks if the user session is set and creates a new instance of the RegisterModel...
    **/
    public function __construct()
    {
        if (isset($_SESSION['auth_status']))
            header("Location: dashboard.php");

        $this->register = new Landlords();
    } // end constructor


    /**
    * @param array
    * @return array|boolean
    * @desc Verifies, Creates, and returns a user by calling the register method on the RegisterModel...
    **/
    public function register(array $data)
    {
        $fname = $this->test_input($data['fname']);
        $lname = $this->test_input($data['lname']);
        $gender = $this->test_input($data['gender']);
        $email = $this->test_input($data['email']);
        $phone = $this->test_input($data['tel']);
        $password = $this->test_input($data['passwd']);
        $password_verify = $this->test_input($data['passwd_verify']);

        $EmailStatus = $this->register->fetchUser($email)['status'];

        $Error = array(
            'name' => '',
            'email' => '',
            'tel' => '',
            'passwd' => '',
            'status' => false
        );

        if (preg_match('/[^A-Za-z\s]/', $lname))
        {
            $Error['fname'] = 'Only Alphabets are allowed.';
            return $Error;
        }

        if (preg_match('/[^A-Za-z\s]/', $lname))
        {
            $Error['lname'] = 'Only Alphabets are allowed.';
            return $Error;
        }

        if (!empty($EmailStatus))
        {
            $Error['email'] = 'Sorry. This Email Address has been taken.';
            return $Error;
        }

        if (!empty($gender))
        {
            $Error['gender'] = 'Sorry. Please choose your gender.';
            return $Error;
        }

        if (preg_match('/[^0-9_]/', $phone) && strlen($phone) < 10)
        {
            $Error['tel'] = 'Please, use a valid phone number with area code.';
            return $Error;
        }

        if (strlen($password) < 7)
        {
            $Error['passwd'] = 'Please, use a stronger password.';
            return $Error;
        }

        $Payload = array(
            'fname' => $fname,
            'lname' => $lname,
            'gender' => $gender,
            'email' => $email,
            'tel' => $phone,
            'passwd' => password_hash($password, PASSWORD_BCRYPT)
        );

        $Response = $this->register->create_Landlord($Payload);

        $Data = $this->register->fetchUser($email)['data'];
        //Makes a whole lot of sense to get rid of any critical information...
        unset($Data['passwd']);
        unset($Data['passwd_verify']);

        if (!$Response['status']) {
        $Response['status'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
        return $Response;
        }

        $_SESSION['data'] = $Data;
        $_SESSION['auth_status'] = true;
        header("Location: dashboard.php");
        return true;
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

} // end class Register



  ?>
