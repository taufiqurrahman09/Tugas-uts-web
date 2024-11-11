<?php
if($_SERVER["REQUEST_METHOD"]====="POST")
{

    //menangani data form yang dikirim 
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["pasword"];)
    
    // cek jika ada data input kosong
    if(empty($name)|| empty($email)){
        echo"Nama dan Pasword wajib diisi!";


    }else{
        // Menampilkan hasil Pengolahan data
        echo"<h2>Terimakasih " .$name. "</h2>";
    
        echo "<p>pasword sampean:" .$enail. "</p>";
    }

}
?