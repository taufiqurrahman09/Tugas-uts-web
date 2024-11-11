/ Fungsi JavaScript untuk validasi input sebelum form dikirim
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
}