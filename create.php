
<html lang="en">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create view</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
  </head>
  <body>
    <div class="container">
        <h1 class= "mt-5">Create your form here</h1>
    <form class ="mt-5 w-50 " method = "post" action = "create.php">
                
                <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control" name = "name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label >Address</label>
                    <input type="text" class="form-control" name = "address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label >phone</label>
                    <input type="text" class="form-control" name = "phone" placeholder="981******">
                </div>
                <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
    

<?php

    include 'conn.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $query = "select * from students  where name = '$name'";
        $x = mysqli_query($conn,$query);
        $checkQuery = mysqli_num_rows($x);
        // echo $checkQuery;


        if ($checkQuery>=1){
            echo "username already exists";
        }

        else if ($name =="" and $phone == ""){
            echo "please fill the name and phone";
        }
        else if($name == ""){
            echo "please fill up the name";
        }
        else if ($phone == ""){
            echo "please fill the phone number";
        }
        else{
            $sql = "INSERT INTO students ( name, Address, phone) VALUES ('$name', '$address', '$phone')";
            $result = mysqli_query($conn,$sql);
            // echo $result;

            if($result){
                echo "successfully inserted into database";
            }


        }


    }
?>