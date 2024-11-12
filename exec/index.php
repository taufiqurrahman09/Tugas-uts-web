<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    //menangani data form yang dikirim 
    $name = htmlspecialchars($_POST["name"]);
    $password = htmlspecialchars($_POST["password"]);
    
    // cek jika ada data input kosong
    if(empty($name)|| empty($password)){
        echo"Nama dan Pasword wajib diisi!";


    }else{
        //menampilkan hasil pengolahan data
        echo"<h2>Selamat datang" .$name. "!</h2>";

    }

}
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //menangani data form yang dikirim
    $name=htmlspecialchars($_POST['name']);
    $password=
    htmlspecialchars($_POST['password']);

//cek jika ada data input yang kosong
if(empty($name)||empty($password)) {

     echo" Nama dan password wjib diisi!";

}else{
    //Menampilkan hasil pengolahan data
    echo"<h2>Selamat datang" .$name."!</h2>";
}
}


?>

    
   