<?php

  require_once('C:\xampp\htdocs\off_campus_project\backend\config/Off_Campus_DB.php');


  /**
   *
   */
  class Apartments extends Off_Campus_DB
  {

    /**
      * @param array
      * @return array
      * @desc Creates a lanlord record....
    **/
    public function create_Landlord(array $apartment) :array
    {
      $this->query("INSERT INTO `landlords_info` (Apartment_Addr_1, Apartment_Addr_2, Apartment_Parish, Apartment_Distance, Apartment_Latitude, Apartment_Longitude, Rent, Rooms_Available, Rooms_Occupied)
      VALUES (:addr1, :addr2, :parish, :distance, :latitude, :longitude, :rent, :available, :occupied)");
      $this->bind('addr1', $landlord['aadr1']);
      $this->bind('addr2', $landlord['addr2']);
      $this->bind('parish', $landlord['parish']);
      $this->bind('distance', $landlord['distance']);
      $this->bind('latitude', $landlord['latitude']);
      $this->bind('longitude', $landlord['longitude']);
      $this->bind('rent', $landlord['rent']);
      $this->bind('available', $landlord['available']);
      $this->bind('occupied', $landlord['occupied']);


      if ($this->execute()) {
        $Response = array( 'status' => true, );
        return $Response;
      }
      else
      {
        $Response = array('status' => false);
        return $Response;
      }
  } // end of create_Landlord function



  /**
    * @param array
    * @return array
    * @desc get all apartment info from a specific lanlord....
  **/
  public function get_apartment_Info()
  {
      $this->query("SELECT * FROM `apartments_info` INNER JOIN `landlords_info` ON  `apartments_info.Landlord_ID` = `landlords_info.Landlord_ID`");
      // $this->bind('id', $landlord_id);
      $this->execute();

      $all_apartment_Names = $this->fetchAll();

      if (!empty($$all_apartment_Names)) {
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
    * @desc Update a apartment addr1 ....
  **/
  public function update_apartment_Addr(string $apartment_info)
  {
      $this->query("UPDATE `apartment_info` SET `Apartment_Addr1` = :addr1 WHERE `Apartment_ID` = :id");
      $this->bind('addr1', $addr1);
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
    * @desc Update a apartment addr2 ....
  **/
  public function update_apartment_Addr2(string $apartment_info)
  {
      $this->query("UPDATE `apartment_info` SET `Apartment_Addr2` = :addr2 WHERE `Apartment_ID` = :id");
      $this->bind('addr2', $addr2);
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
    * @desc Update a apartment Parish ....
  **/
  public function update_apartment_Parish(string $apartment_info)
  {
      $this->query("UPDATE `apartment_info` SET `Apartment_Parish` = :parish WHERE `Apartment_ID` = :id");
      $this->bind('parish', $parish);
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
    * @desc Update a apartment distance....
  **/
  public function update_apartment_Distance(string $apartment_info)
  {
      $this->query("UPDATE `apartment_info` SET `Apartment_Distance` = :distance WHERE `Apartment_ID` = :id");
      $this->bind('distance', $distance);
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
    * @desc Update a apartment latitude ....
  **/
  public function update_apartment_Latitude(string $apartment_info)
  {
      $this->query("UPDATE `apartment_info` SET `Apartment_Latitude` = :lat WHERE `Apartment_ID` = :id");
      $this->bind('lat', $latitude);
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
    * @desc Update a apartment longitude ....
  **/
  public function update_apartment_Longitude(string $apartment_info)
  {
      $this->query("UPDATE `apartment_info` SET `Apartment_Logitude` = :long WHERE `Apartment_ID` = :id");
      $this->bind('long', $longitude);
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
    * @desc Update a apartment rent ....
  **/
  public function update_apartment_Rent(string $apartment_info)
  {
      $this->query("UPDATE `apartment_info` SET `Rent` = :rent WHERE `Apartment_ID` = :id");
      $this->bind('rent', $rent);
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
    * @desc Update a apartment rooms available ....
  **/
  public function update_apartment_RoomsAvailable(string $apartment_info)
  {
      $this->query("UPDATE `apartment_info` SET `Rooms_Available` = :available WHERE `Apartment_ID` = :id");
      $this->bind('available', $available);
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
    * @desc Update a apartment rooms Rooms Occupied ....
  **/
  public function update_apartment_RoomsOccupied(string $apartment_info)
  {
      $this->query("UPDATE `apartment_info` SET `Rooms_Occupied` = :occupied WHERE `Apartment_ID` = :id");
      $this->bind('occupied', $occupied);
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






  } // end apartments class
 ?>
