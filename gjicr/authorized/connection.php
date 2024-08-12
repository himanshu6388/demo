<?php

$host="localhost";
$db="gjicr";
$user="root";
$pass="";

// MySQLi Extention//

//MySQLi with procedural approach
// $conn=mysqli_connect($host,$user,$pass,$db,3300);
// if(!$conn){
//     die("connection failed".mysqli_connect_error());

// }else{
//     echo"Connection successfully created"; 
// }

// MySQLi object-oriented approach

$connn=new mysqli($host,$user,$pass,$db);
if($connn->connect_error){

    die("connection failed".$connn->connect_error);
}else{
    echo"connection using oops connected sucessfully";
}

//PDO(PHP Data Object) //



// if($connn->query($querystring)===TRUE){

//     echo"Record added sucessfullly";
// }else{

//     echo"Error in record insertion ".$querystring."<br>".$conn->error;
// }



?>