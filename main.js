//Fungsi JavaScript untuk validasi input sebelum form dikirim
function validateForm() {
    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;

    if(name===""){
        alert("Nama harus diisi!");
        return false;

    }
    if(password===""){
        alert("Nama harus diisi!");
        return false;
    }

    //Menampilkan pesan selamat datang tanpa reload halaman

    document.getElementById("resul").innerHTML=
    "<h2>selamat datang ,"+ name+"!</h2>";
    return false;//mencegah submit form default

}
//Fungsi JavaScript untuk validasi input sebelum form dikirim
function validateForm() {
    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;
