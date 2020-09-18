<?php

if(isset($_POST['Submit'])){

    $nama = $_POST['nama_barang'];
    $diskripsi = $_POST['description'];
    $filex = $_FILES['file_'];
    include ("config.php");    
   
    //file tertentu
    $convert = ['jpg','png','jpeg'];
    // //mengambil nama file
    $nama1 = $_FILES['file_']['name'];
    $x = explode('.',$nama1);
    $ekstensi = strtolower(end($x));
    $file_temp = $_FILES['file_']['tmp_name'];
    
    if(in_array($ekstensi,$convert) === true){
        //jika data telah benar saat diconvet akan masuk ke file barang
        move_uploaded_file($file_temp,'barang/'.$nama1);
        $query = mysqli_query($db,"INSERT INTO data_shop VALUES('','$filex','$nama1','$nama','$diskripsi')");
        header("LOCATION:index.php");
    }
    else{
        echo"gagal terupload ke databse";
    };
};
?>