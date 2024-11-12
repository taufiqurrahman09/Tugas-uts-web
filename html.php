<?php
include('exec/index.php')
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF">
        <meta name="viewport"
    content="width=device-width,initial-scale=1.0">
    <title>sedikit tak terkendali</title>
    <link rel="stylesheet"href="index.css">
    <script src="script.js"defer></script>
    </head>
    <body>
        <div class="container">
            <h1>Masuk Saja</h1>
            <form action="/" method="POST"
            onsubmit="return validateForm()">
              <label for="nama">Nama:</label>
              <input type="text"id="name"
              name="name"placeholder="masukan nama sampean">

<label for="pasword">password:</label>
<input type="password" id="password"
name="password"placeholder="masukan pasword sampean">

<input type="submit"value="login">
        </form> 
        </div id="result"></div><div untuk menampilkan hasil->
        </div>
    </body>
</html>