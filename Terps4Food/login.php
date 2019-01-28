<?php
echo "yes\n";

     mysql_connect("localhost","root");
     if(!mysql_select_db("mydb"))
     {
       echo "yes\n";
     }
     echo "yes\n";


     if(isset($_POST['User']) || isset($_POST['Pass']))
     {
       $User = $_POST['User'];
       $Pass = $_POST['Pass'];
       echo "" . mysql_query("show indexes from login");
       $query = "insert into login (Username, Password) values ('$User', '$Pass')";
       if(mysql_query($query)) //run the query
       {
         echo "your log is inserted in the database";
       }
       else {

         echo 'yes ' . mysql_error() . "\n";
       }
     }
     else {
       echo "yes";
     }
?>
