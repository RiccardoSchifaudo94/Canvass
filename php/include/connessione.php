<?php
function connetti($db){

$server = "localhost";
$password = "";
$user = "root";


$con = mysqli_connect("$server","$user","$password","$db") 
or die ("connessione non riuscita al db!".$sql.mysqli_error()) ;

return $con;


}



