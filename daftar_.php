<?php
        if(isset($_POST['Submit'])) {
        $name = $_POST['Nama'];
        $email = $_POST['Email'];
        $pass = $_POST['Password'];
        include("config.php");
        // Insert user data into table
        $result = mysqli_query($db, "INSERT INTO pengunjung (id,Nama,Email,Password) VALUES('','$name','$email','$pass')");
        // $result = mysqli_query($db,"INSERT INTO mahasiswa ($name,$email,$pass)");
        header("LOCATION:index.html"); 
    }   
?>