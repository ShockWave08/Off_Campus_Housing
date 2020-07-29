<?php

  require_once('C:\xampp\htdocs\off_campus_project\backend\config/Off_Campus_DB.php');


  /**
   *
   */
  class Apartment_Attr extends Off_Campus_DB
  {
      /**
        * @param array
        * @return array
        * @desc Add l info to database
      **/
      public function create_Landlord(array $apartment_attr) :array
      {
        $this->query("INSERT INTO `apartment_attr` (Available, All_Inclusive, Internet, Water, Washing_Machine, Gas, BurglarBars, Air_Condition, Shared, Studio, Flat, Apartment, Fenced, Furnished, Unfurnished, Water_Heater, Live_In)
        VALUES (:avail, :inclusive, :internet, :water, :machine, :gas, :bars, :aircon, :shared, :studio, :flat, :apartment, :fence, :furnished, :unfurnished, :heater, :livein)");
        $this->bind('avail', $apartment_attr['availability']);
        $this->bind('inclusive', $apartment_attr['inclusive']);
        $this->bind('internet', $apartment_attr['internet']);
        $this->bind('water', $apartment_attr['water']);
        $this->bind('machine', $apartment_attr['machine']);
        $this->bind('gas', $apartment_attr['gas']);
        $this->bind('bars', $apartment_attr['bars']);
        $this->bind('aircon', $apartment_attr['aircon']);
        $this->bind('shared', $apartment_attr['shared']);
        $this->bind('studio', $apartment_attr['studio']);
        $this->bind('flat', $apartment_attr['flat']);
        $this->bind('apartment', $apartment_attr['apartment']);
        $this->bind('fenced', $apartment_attr['fenced']);
        $this->bind('furnished', $apartment_attr['furnished']);
        $this->bind('unfurnished', $apartment_attr['unfurnished']);
        $this->bind('heater', $apartment_attr['heater']);
        $this->bind('livein', $apartment_attr['livein']);
        $this->bind('attr_ID', $apartment_attr['attr_ID']);


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
      * @desc Creates a lanlord record....
    **/
    public function update_Apartment_Attr(array $apartment_attr) :array
    {
        //$this->query("INSERT INTO `landlords_info` (Available, All_Inclusive, Internet, Water, Washing_Machine, Gas, BurglarBars, Air_Condition, Shared, Studio, Flat, Apartment, Fenced, Furnished, Unfurnished, Water_Heater, Live_In)
        $this->query("UPDATE `apartment_attr` SET Available = :avail, All_Inclusive = :inclusive, Internet = :internet, Water = : water, Washing_Machine = :machine,
            Gas = :gas, BurglarBars = :gas, Air_Condition = :aircon, Shared = :shared, Studio = :studio, Flat = :flat, Apartment = :apartment, Fenced = :fenced,
            Furnished = :furnished, Unfurnished = :unfurnished, Water_Heater = :heater, Live_In = :livein WHERE Apartment_Attr_ID = :attr_ID");

            $this->bind('avail', $apartment_attr['availability']);
            $this->bind('inclusive', $apartment_attr['inclusive']);
            $this->bind('internet', $apartment_attr['internet']);
            $this->bind('water', $apartment_attr['water']);
            $this->bind('machine', $apartment_attr['machine']);
            $this->bind('gas', $apartment_attr['gas']);
            $this->bind('bars', $apartment_attr['bars']);
            $this->bind('aircon', $apartment_attr['aircon']);
            $this->bind('shared', $apartment_attr['shared']);
            $this->bind('studio', $apartment_attr['studio']);
            $this->bind('flat', $apartment_attr['flat']);
            $this->bind('apartment', $apartment_attr['apartment']);
            $this->bind('fenced', $apartment_attr['fenced']);
            $this->bind('furnished', $apartment_attr['furnished']);
            $this->bind('unfurnished', $apartment_attr['unfurnished']);
            $this->bind('heater', $apartment_attr['heater']);
            $this->bind('livein', $apartment_attr['livein']);
            $this->bind('attr_ID', $apartment_attr['attr_ID']);

            if ($this->execute()) {
              $Response = array( 'status' => true, );
              return $Response;
            }
            else
            {
              $Response = array('status' => false);
              return $Response;
            }

    }

  } // end apartment_attr class



?>
