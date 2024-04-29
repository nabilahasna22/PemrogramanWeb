<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <!-- Kolom-kolom yang akan ditampilkan dalam tabel -->
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Mengimpor koneksi ke database
        include('koneksi.php');
        
        // Mendefinisikan nomor urut awal
        $no = 1;
        
        // Membuat query untuk mengambil data anggota secara descending berdasarkan ID
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        
        // Menyiapkan dan mengeksekusi query
        $sql = $db1->prepare($query);
        $sql->execute();
        
        // Mendapatkan hasil query dalam bentuk associative array
        $res1 = $sql->get_result();

        // Memeriksa apakah ada data yang ditemukan
        if($res1->num_rows > 0){
            while($row = $res1->fetch_assoc()){
                // Mendapatkan data dari setiap baris hasil query
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? "Laki-laki" : "Perempuan";
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
                
                // Menampilkan data dalam baris tabel
                echo "<tr>
                        <td>$no</td>
                        <td>$nama</td>
                        <td>$jenis_kelamin</td>
                        <td>$alamat</td>
                        <td>$no_telp</td>
                        <td>
                            <button id='$id' class='btn btn-success btn-sm edit_data'><i class='fa fa-edit'>Edit</i></button>
                            <button id='$id' class='btn btn-danger btn-sm hapus_data'><i class='fa fa-trash'>Delete</i></button>
                        </td>
                    </tr>";
                $no++;
            }
        } else {
            // Jika tidak ada data yang ditemukan, tampilkan pesan khusus
            echo "<tr>
                    <td colspan='7'>Tidak ada data ditemukan</td>
                </tr>";
        }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function(){
        // Menginisialisasi plugin DataTable pada tabel
        $('#example').DataTable();
    });
    
    // Fungsi untuk mereset pesan error
    function reset(){
        document.getElementById("err_nama").innerHTML = "";
        document.getElementById("err_jenis_kelamin").innerHTML = "";
        document.getElementById("err_alamat").innerHTML = "";
        document.getElementById("err_no_telp").innerHTML = "";
    }
    
    // Event listener untuk tombol edit
    $(document).on('click', '.edit_data', function(){
        // Menggulir ke bagian atas halaman
        $('html, body').animate({scrollTop: 0}, 'slow');
        
        // Mendapatkan ID data yang akan diedit
        var id = $(this).attr('id');
        
        // Mengirim permintaan AJAX untuk mendapatkan data lengkap
        $.ajax({
            type: 'POST',
            url: "get_data.php",
            data: {id:id},
            dataType: 'json',
            success: function(response){
                // Mereset pesan error
                reset();
                
                // Menggulir ke bagian bawah form
                $('html, body').animate({scrollTop: 30}, 'slow');
                
                // Mengisi nilai form dengan data yang diterima
                document.getElementById("id").value = response.id;
                document.getElementById("nama").value = response.nama;
                document.getElementById("alamat").value = response.alamat;
                document.getElementById("no_telp").value = response.no_telp;
                if(response.jenis_kelamin == "L"){
                    document.getElementById("jenkel1").checked = true;
                } else {
                    document.getElementById("jenkel2").checked = true;
                }
            }, error: function(response){
                console.log(response.responseText);
            }
        });
    });
    
    // Event listener untuk tombol hapus
    $(document).on('click', '.hapus_data', function(){
        // Mendapatkan ID data yang akan dihapus
        var id = $(this).attr('id');
        
        // Mengirim permintaan AJAX untuk menghapus data
        $.ajax({
            type: 'POST',
            url: "hapus_data.php",
            data: {id:id},
            success: function(){
                // Memuat ulang data setelah penghapusan
                $('.data').load("data.php");
            }, error: function(response){
                console.log(response.responseText);
            }
        });
    });
</script>
