<?php   
 //database.php  
 class Databases{  
      public $con;  
      public $error;  
      public function __construct()  
      {  
           $this->con = mysqli_connect("mysqli", "root", "root", "testing");  
           if(!$this->con)  
           {  
                echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
           }  
      } 
	  echo 'hello word'
       
 }  
 echo 'hello word'
 ?>  