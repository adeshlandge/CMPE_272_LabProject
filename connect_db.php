<?php
$servername='localhost:3306';
$username="adeshlan";
$password="Ilovesman1998@a";

try
{
    $con=new PDO("mysql:host=$servername;dbname=adeshlan_WPZJS",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
     
?>