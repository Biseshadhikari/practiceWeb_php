<?php
    include 'conn.php';
    if(isset($_GET['sid'])){
        $sid = $_GET['sid'];
        $sql = "delete from students where sid = '$sid'";
        $query = mysqli_query($conn,$sql);
        if ($query){
            header('Location:index.php');
        }


    }
?>