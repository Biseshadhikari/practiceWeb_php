<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>List view</title>
  </head>
  <body>
    <div class="container">
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">sid</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">phone</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
        include 'conn.php';
        $sql = "select * from students";
        $query = mysqli_query($conn,$sql);
        if ($query){
            
            while($result = mysqli_fetch_array($query)){
               $sid = $result['sid']; 
               $name = $result['name']; 
               $address = $result['Address'];
               $phone = $result['phone']; 
               echo "
               <tr>
                    <th >$sid</th>
                    <td>$name</td>
                    <td>$address</td>
                    <td>$phone</td>
                    <td>
                        <a href  ='update.php?sid=$sid'/ class = 'btn btn-primary'>update</a>
                        <a href  ='delete.php?sid=$sid'/ class = 'btn btn-danger'>Delete</a>
                    </td>
                 </tr>
               ";

            }
            
        }

    ?>
    

  </tbody>
</table>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>