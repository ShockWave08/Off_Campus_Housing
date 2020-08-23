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
    public $active = 'Register'; //for highlighting the active link...
    private $register;

    /**
    * @param null|void
    * @return null|void
    * @desc Checks if the user session is set and creates a new instance of the RegisterModel...
    **/
    public function __construct()
    {
        if (isset($_SESSION['auth_status']))
            header("Location: welcome.php");

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
            'fname' => '',
            'lname' => '',
            'gender' => '',
            'email' => '',
            'tel' => '',
            'passwd' => '',
            'status' => false
        );


        // Remove all illegal characters from first name
        $fname = filter_var($fname, FILTER_SANITIZE_STRING);
        
        if (preg_match('/[^A-Za-z\s]/', $fname))
        {
            $Error['fname'] = 'Only Alphabets are allowed.';
            
            return $Error;
        }

        // Remove all illegal characters from last name
        $lname = filter_var($lname, FILTER_SANITIZE_STRING);
        
        if (preg_match('/[^A-Za-z\s]/', $lname))
        {
            $Error['lname'] = 'Only Alphabets are allowed.';
            
            return $Error;
        }


        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if (!empty($EmailStatus))
        {
            $Error['email'] = 'Sorry. This Email Address has been taken.';

            return $Error;
        }
        
        
        
        // validate email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        {
            $Error['email'] = 'Sorry. This is not a Valid Email';
        }

        
        if (empty($gender))
        {
            $Error['gender'] = 'Sorry. Please choose your gender.';

            return $Error;
        }
        
        
        //  && strlen($phone) < 10
        if (preg_match('/[^0-9_]/', $phone))
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
        header("Location: welcome.php");
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
