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
<?php
    if (isset($_GET['id'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    $class = $_GET['class'];
}else{
    $id ="";
    $name = "";
    $class ="";
}

?>
   <div class="container rounded" >
    <div class="row justify-content-center mt-4">
        <div class="col-sm-8">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                <div class="card-body ">
                    <form action="could.php" method ="post">
                        <div class="form-group m-2" >
                            <label for="" class="form-label">StudentId</label>
                            <input type="text" name="Student_Id" id="" class="form-control" 
                            placeholder="" value="<?php echo $id ?>
                            ">
                    </div>
                    <div class="form-group m-2">
                    <label for="" class="form-label">Student Name</label>
                            <input type="text" name="Student_Name" id="" class="form-control"
                            placeholder="" value="<?php echo $name ?>
                            ">
                    </div>
                    <div class="form-group m-2">
                    <label for="" class="form-label">Student Class</label>
                            <input type="text" name="Student_Class" id="" class="form-control"
                            placeholder="" value="<?php echo $class ?>
                            ">
                    </div>
                    <button type="submit"  name="insert" class="btn btn-warning m-2 " >Save Info </button>
                    <button type="submit"  name="Upadte" class="btn btn-info m-2 " >Upadet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div> 
















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>