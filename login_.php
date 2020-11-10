<?php 
    include("config.php");
    if(isset($_POST['Submit'])){
        session_start();
        session_destroy();
        //get data
        $email = $_POST['Email'];
        $pass = $_POST['Password'];
        // //hash
        // $hash = password_hash($pass,PASSWORD_DEFAULT);
        //result mysql
        $result = mysqli_query($db,"SELECT * FROM admin_db WHERE email = '$email'");
        if (mysqli_num_rows($result) === 1){
            $data = mysqli_fetch_assoc($result);
            if($pass == $data['password']){
                header("LOCATION:admin.html");
            }
            else{
                 echo"<script>alert('password salah')</script>";
            }
        }   
        
        

        // //mengambil data dari admin;
        // //apakah didalam admin_db ada email yang sama seperti yang diinput user?
        // $result = mysqli_query($db,"SELECT * FROM admin_db WHERE email ='$email'");
    
        // //jika ada colum admin ada data email
        // if (mysqli_num_rows($result) === 1){
        //     $data = mysqli_fetch_assoc($result);
        //     if($pass == $data["password"]){
        //         header("LOCATION:admin.php");
        //     }
        //     else{
        //         echo"<script>alert('password salah')</script>";
        //     }
        // }
        // else{
        //     $insert= mysqli_query($db,"INSERT INTO admin_db VALUES ")
        //     header("LOCATION:index.html");
        // }
    }
?>