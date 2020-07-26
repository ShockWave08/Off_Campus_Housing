<?php

/**
 *
 */
class Off_Campus_DB
{

  // Database connection info
  protected $DB_SERVER = 'localhost';                // Host name of the MySQL server
  protected $DB_USERNAME = 'Off_Campus_Admin';       // account username
  protected $DB_PASSWORD = 'RefugE08**';             // MySQL account password
  protected $DB_NAME = 'off_campus_housing_db';      // Database Name

  // Database handle and statements
  protected $DB_HANDLE;
  protected $DB_STMT;



  /**
      * @param null|void
      * @return null|void
      * @desc Creates or resume an existing database connection...
    **/
    public function __construct()
    {
      // Create a DSN Resource...
      $Dsn = "mysql:host=" . $this->DB_SERVER . ';dbname=' . $this->DB_NAME;

      // Create the PDO error mode to exception
      $Options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );

      try
      {
        // PDO object creation
        $this->DB_HANDLE = new PDO($Dsn, $this->DB_USERNAME, $this->DB_PASSWORD, $Options);
        //echo "Connected successfully";
      }
      catch (Exception $e)
      {
         die("ERROR: Could not connect. " . $e->getMessage());   // If there is an error an exception is thrown
        //var_dump('Couldn\'t Establish A Database Connection. Due to the following reason: ' . $e->getMessage());
      }
    }


    /**
      * @param string
      * @return null|void
      * @desc Creates a PDO statement object
    **/
    public function query($query)
    {
      $this->DB_STMT = $this->DB_HANDLE->prepare($query);
    }



    /**
      * @param string|integer|
      * @return null|void
      * @desc Matches the correct datatype to the PDO Statement Object.
    **/
    public function bind($param, $value, $type = null)
    {
        if (is_null($type))
        {
            switch (true)
            {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }

      $this->DB_STMT->bindValue($param, $value, $type);

  } // end function bind


    /**
      * @param null|void
      * @return null|void
      * @desc Executes a PDO Statement Object or a db query...
    **/
    public function execute()
    {
      $this->DB_STMT->execute();
      return true;
    }



    /**
      * @param null|void
      * @return null|void
      * @desc Executes a PDO Statement Object an returns a single database record as an associative array...
    **/
    public function fetch()
    {
      $this->execute();
      return $this->DB_STMT->fetch(PDO::FETCH_ASSOC);
    }



    /**
      * @param null|void
      * @return null|void
      * @desc Executes a PDO Statement Object an returns nultiple database record as an associative array...
    **/
    public function fetchAll()
    {
      $this->execute();
      echo 'fetchAll';
      return $this->DB_STMT->fetchAll(PDO::FETCH_ASSOC);
    }

  } // End class Off_Campus_DB

?>
