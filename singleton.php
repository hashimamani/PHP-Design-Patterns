<?php
/* create a class database that will be used to connect to a database on one instance*/
class database
{
	public static $connection;

  /*the constructor will tell us if the object has been instantiated*/

	private function __construct()
	{
	echo "connection created\n";
	}
    /*if the connection doesnt exist then create the object*/
    public static function connect()
    {  

          if (!isset(self::$connection))
          {	
            self::$connection=new database;
          }
          
      return self::$connection;

    } 

]  

   /*create the sql codes that will be used for connection below*/
    public static function query($sql)
    {
     mysql_query($sql);
    }
   
}

//call the objects 

$conn1=database::connect();
$conn2=database::connect();//this instance will not be creates

?>