<?php

 // object oreinted  /
 // procedural 

 // marka connection la samysaysanyo wax laga rabbo
 // host 
 //user 
 // password
 // database aad adaysid 


 $conn =new mysqli("localhost", "root","","mydp");

 if($conn->connect_error){
    echo $conn ->error;
 }else{
    // echo "Connection";
 }


?>