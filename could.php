<?php

include 'configartion.php';


// when we need to register
// laba nocba lo so submit gareeyaa
// POST /GET

if(isset($_POST['insert'])){
    
    $studentId = $_POST['Student_Id'];
    $studentName = $_POST['Student_Name'];
    $studentClass = $_POST['Student_Class'];

// perperiy the qureyy
    $query ="insert into mytable(id,Name,class) values(
    '$studentId','$studentName','$$studentClass')";



// excute the query
$result= $conn->query($query);

if ($result) {
    echo "good result";
}else{
   echo $conn->error;
}
}elseif(isset($_POST['update'])){
    if(isset($_POST['insert'])){
    
        $studentId = $_POST['Student_Id'];
        $studentName = $_POST['Student_Name'];
        $studentClass = $_POST['Student_Class'];
    
    // perperiy the qureyy
        $query ="UPDATE mytable SET name = '$studentName', class='$studentClass' where id = '$studentId";
    
    
    
    // excute the query
    $result= $conn->query($query);
    
    if ($result) {
        echo "upadted ";
        header("Location:list.php");
    }else{
       echo $conn->error;
    }
}

if(isset($_GET['id'])){

        $studentId = $_GET['Student_Id'];
       
    
    // perperiy the qureyy
        $query ="DELETE mytable WHERE id = '$studentId'";
    
    
    
    // excute the query
    $result= $conn->query($query);
    
    if ($result) {
        echo "upadted ";
        header("Location:list.php");
    }else{
       echo $conn->error;
    }

}


?>