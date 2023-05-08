<?php
include 'configartion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-contect-center">
            <div class="col-sm-8">
                <table class="table">
                    <thead?>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                </thead>
                <tbody>

                 <?php

                $query = "select * from mytable";
                $resut = $conn -> query($query);
                $htmlTable ="";
                    if($resut){

                        $htmlTable .="<tr>";
                        while($row = $resut-> fetch_assoc()){
                           $htmlTable .="<td>" . $row['id']. "</td>";
                           $htmlTable .="<td>" . $row['name']. "</td>";
                           $htmlTable .="<td>" . $row['class']. "</td>";

                           $upadetelink ="form.php?id=" . $row['id'] . "&name" . 
                           $row['name'] . "&class" . $row['class'];

                           $delete_link ="could.php?id=" . $row['id'];


                           $htmlTable.= "<td>" . '<a href ="'.$upadetelink.'" class="btn
                           btn-success p-1 m-1"> Update</a><a href ="'.$delete_link.'" class="btn
                           btn-danger p-1 m-1"> Delete</a>' . "</td>";
                           $htmlTable .= "</tr>";  
                        }
                       echo  $htmlTable;

                    }else{
                        echo $conn->error;
                    }
                    ?>
               </tbody>
           </table>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>