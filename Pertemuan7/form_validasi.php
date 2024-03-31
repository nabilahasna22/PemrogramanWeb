<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title> 
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Sumber jQuery eksternal -->
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1> 
        <!-- Formulir untuk memasukkan data -->
        <form id="myForm">
            <label for="nama">Nama:</label> 
            <input type="text" id="nama" name="nama"> 
            <span id="nama-error" style="color: red;"></span><br> 

            <label for="email">Email:</label> 
            <input type="text" id="email" name="email"> 
            <span id="email-error" style="color: red;"></span><br> 

            <!-- Penambahan fitur password -->
            <label for="password">Password:</label> 
            <input type="password" name="password" id="password"> 
            <span id="pass-system" style="color: red;"></span><br> 

            <input type="submit" value="Submit"> <!-- Tombol submit untuk mengirimkan formulir -->
            <hr> <!-- Memberi Garis pemisah -->
        </form>

        <div id="hasil">
            <!-- Hasil dari AJAX akan ditampilkan di sini -->
        </div>
        
        <script>
            $(document).ready(function() {
                $("#myForm").submit(function (event) {
                    var nama = $("#nama").val(); // Mengambil nilai dari input nama
                    var email = $("#email").val(); // Mengambil nilai dari input email
                    var pass = $("#password").val(); // Mengambil nilai dari input password
                    var valid = true; // Variabel untuk menandai apakah formulir valid

                    // Validasi nama
                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi."); // Jika kosong, tampilkan pesan kesalahan
                        valid = false; // Set validasi menjadi salah
                    } else {
                        $("#nama-error").text(""); // Jika tidak kosong, hapus pesan kesalahan
                    }

                    // Validasi email
                    if (email === "") {
                        $("#email-error").text("Email harus diisi."); // Jika kosong, tampilkan pesan kesalahan
                        valid = false; // Set validasi menjadi salah
                    } else {
                        $("#email-error").text(""); // Jika tidak kosong, hapus pesan kesalahan
                    }

                    // Validasi password
                    if (pass === "") {
                        $("#pass-system").text("Password harus diisi."); // Jika kosong, tampilkan pesan kesalahan
                        valid = false; // Set validasi menjadi salah
                    } else if (pass.length < 8) {
                        $("#pass-system").text("Password minimal 8 karakter."); // Jika kurang dari 8 karakter, tampilkan pesan kesalahan
                        valid = false; // Set validasi menjadi salah
                    } else {
                        $("#pass-system").text(""); // Jika memenuhi syarat, hapus pesan kesalahan
                    }

                    if (!valid) {
                        event.preventDefault(); // Menghentikan pengiriman formulir jika validasi gagal
                    }
                    
                    event.preventDefault(); // Menghentikan pengiriman formulir secara default

                    var formData = $("#myForm").serialize(); // Mengumpulkan data formulir
                    // Kirim data ke server PHP menggunakan AJAX
                    $.ajax({
                        url: "proses_validasi.php", // Nama file PHP untuk diproses
                        type: "POST",
                        data: formData, // Data formulir yang akan dikirim
                        success: function (response) {
                            // Tampilkan hasil dari server di div "hasil"
                            $("#hasil").html(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
