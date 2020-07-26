<?php

  require_once('C:\xampp\htdocs\off_campus_project\backend\config/Off_Campus_DB.php');


  /**
   *
   */
  class Landlords extends Off_Campus_DB
  {

    /**
      * @param array
      * @return array
      * @desc Creates and returns a user record....
    **/
    public function create_Landlord(array $landlord) :array
    {
        echo 'enters create';
        $this->query("INSERT INTO `landlords_info` (Landlord_FName, Landlord_LName, Landlord_Gender, Landlord_Email, Landlord_Tel, Landlord_Passwd) VALUES (:fname, :lname, :gender, :email, :phone_no, :password)");
        $this->bind('fname', $landlord['fname']);
        $this->bind('lname', $landlord['lname']);
        $this->bind('gender', $landlord['gender']);
        $this->bind('email', $landlord['email']);
        $this->bind('phone_no', $landlord['tel']);
        $this->bind('password', $landlord['passwd']);

        if ($this->execute())
        {
            $Response = array( 'status' => true );
            echo 'User Created cl';

            return $Response;
        }

        else
        {
            $Response = array('status' => false);
            echo 'Did not create user';

            return $Response;
        }

    } // end function create_Landlord


  /**
    * @param array
    * @return array
    * @desc Returns a user record based on the method parameter....
  **/
  public function get_Landlord_Info(string $fname)
  {
    $this->query("SELECT `Landlord_FName` AND `Landlord_LName` FROM `landlords_info` WHERE `Landlord_FName` = :fname");
    $this->bind('lname', $fname);
    $this->execute();


    $fetched_name = $this->fetch();

    if (!empty($User))
    {
      $Response = array( 'status' => true, 'data' => $fetched_name);

      return $Response;
    }

    return array('status' => false, 'data' => []);
  }


  /**
    * @param array
    * @return array
    * @desc Returns a user record based on the method parameter....
  **/
  public function get_All_Landlords()
  {
    $this->query("SELECT * FROM `landlords_info` WHERE `Landlord_LName` = :lname");
    $this->bind('lname', $lname);
    $this->execute();

    $all_Landlord_Names = $this->fetchAll();

    if (!empty($$all_Landlord_Names)) {
      $Response = array( 'status' => true, );
      return $Response;
    }
    else
    {
      $Response = array('status' => false);
      return $Response;
    }
  }


  /**
    * @param array
    * @return array
    * @desc Update a lanlord last name....
  **/
  public function update_Landlord_Name()
  {
    $this->query("UPDATE `landlords_info` SET `Landlord_LName` = :name WHERE `Landlord_ID` = :id ");
    $this->bind('lname', $lname);
    $this->bind('id', $landlord_id);

    if ($this->execute()) {
      $Response = array( 'status' => true, );
      return $Response;
    }
    else
    {
      $Response = array(
        'status' => false
      );
      return $Response;
    }

  }


  /**
    * @param array
    * @return array
    * @desc Update a  lanlord first name....
  **/
  public function update_Landlord_FirstName(string $update_value)
  {

    $this->query("UPDATE `landlords_info` SET `Landlord_LName` = :fname WHERE `Landlord_ID` = :id ");
    $this->bind('fname', $update_value);
    $this->bind('id', $landlord_id);

    if ($this->execute()) {
      $Response = array( 'status' => true, );
      return $Response;
    }
    else
    {
      $Response = array(
        'status' => false
      );
      return $Response;
    }

  }



  /**
    * @param array
    * @return array
    * @desc Update a lanlord email....
  **/
  public function update_Landlord_Email(string $update_value)
  {

    $this->query("UPDATE `landlords_info` SET `Landlord_Email` = :email WHERE `Landlord_ID` = :id ");
    $this->bind('email', $update_value);
    $this->bind('id', $landlord_id);

    if ($this->execute()) {
      $Response = array( 'status' => true, );
      return $Response;
    }
    else
    {
      $Response = array(
        'status' => false
      );
      return $Response;
    }

  }


  /**
    * @param array
    * @return array
    * @desc Update a lanlord telephone number....
  **/
  public function update_Landlord_TelNumber(string $update_value)
  {

    $this->query("UPDATE `landlords_info` SET `Landlord_Tel` = :tel WHERE `Landlord_ID` = :id ");
    $this->bind('tel', $update_value);
    $this->bind('id', $landlord_id);

    if ($this->execute()) {
      $Response = array( 'status' => true, );
      return $Response;
    }
    else
    {
      $Response = array(
        'status' => false
      );
      return $Response;
    }

  }


  /**
    * @param array
    * @return array
    * @desc Update a password....
  **/
  public function update_Landlord_Password(string $update_value)
  {

    $this->query("UPDATE `landlords_info` SET `Landlord_Passwd` = :passwd WHERE `Landlord_ID` = :id ");
    $this->bind('passwd', $update_value);
    $this->bind('id', $landlord_id);

    if ($this->execute()) {
      $Response = array( 'status' => true, );
      return $Response;
    }
    else
    {
      $Response = array(
        'status' => false
      );
      return $Response;
    }

  }




  /**
    * @param array
    * @return array
    * @desc Delete a user record....
  **/
  public function delete_Landlord()
  {
    $this->query("DELETE FROM `landlords_info` WHERE `Landlord_ID` = :id ");
    $this->bind('id', $landlord_id);

    if ($this->execute()) {
      $Response = array( 'status' => true, );
      return $Response;
    }
    else
    {
      $Response = array(
        'status' => false
      );
      return $Response;
    }
  }



    /**
    * @param string
    * @return array
    * @desc Returns a user record based on the method parameter....
    **/
    public function fetchUser(string $email) :array
    {
        $this->query("SELECT * FROM `landlords_info` WHERE `Landlord_Email` = :email");
        $this->bind('email', $email);
        $this->execute();

        $User = $this->fetch();
        if (!empty($User))
        {
            $Response = array('status' => true, 'data' => $User );
            echo 'user fetched';
            return $Response;
        }

        return array('status' => false, 'data' => []);
    }

   /**
      * @param string
      * @return array
      * @desc Returns a user record based on the method parameter....
    **/
    public function fetchEmail(string $email) :array
    {
      $this->query("SELECT * FROM `landlords_info` WHERE `Landlord_Email` = :email");
      $this->bind('email', $email);
      $this->execute();

      $Email = $this->fetch();

      if (empty($Email)) {
        $Response = array('status' => true, 'data' => $Email);
        echo 'email fetched';
        return $Response;
      }

      if (!empty($Email)) {
        $Response = array('status' => false, 'data' => $Email);
        echo 'email not fetched';
        return $Response;
      }
    }


 } // End of Landlords class

 ?>
