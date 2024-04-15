<!DOCTYPE html>
<html>
<head>
    <!-- Menghubungkan stylesheet untuk halaman beranda -->
    <link rel="stylesheet" type="text/css" href="css/homeStyle.css">
    <!-- Menghubungkan stylesheet untuk halaman paket wedding -->
    <link rel="stylesheet" type="text/css" href="css/paketStyle.css">
    <!-- Menghubungkan library jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- Menghubungkan ikon untuk favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo-wo.png">
    <!-- Judul halaman -->
    <title>Hasna Wedding Organizer - Official Website</title>
</head>
<body>
<div class="header">
        <!-- Logo Hasna WO -->
        <img src="img/logo-wo.png" alt="Hasna WO" width="170">
    </div>
    
    <div class="navigasi">
        <div class="container">
            <!-- Navigasi utama -->
            <nav class="main-nav">
                <ul class="menu sf-arrows">
                    <!-- Tautan ke beranda -->
                    <li><a href="index.php">Beranda</a></li>
                    <!-- Tautan ke halaman login -->
                    <li><a href="form.php">Login</a></li>
                    <!-- Tautan ke halaman paket wedding -->
                    <li><a href="paketWedding.php">Paket Wedding</a></li>
                    <!-- Tautan ke bagian pemesanan -->
                    <li><a href="#pesan">Pemesanan</a></li>
                    <!-- Tautan ke bagian kontak -->
                    <li><a href="#kontak">Kontak</a></li>
                    <!-- Tautan ke bagian portofolio -->
                    <li><a href="#portofolio">Portfolio</a></li>
                    <!-- Tautan ke bagian tentang kami -->
                    <li><a href="#about">About Us</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div id="paketwedding" class="paket-wedding">
        <div class="container">
            <!-- Judul paket wedding -->
            <h2 class="sub-title">PAKET WEDDING</h2>
            <!-- Garis pemisah -->
            <hr>
            <!-- Paket Silver -->
            <div class="paket">
                <!-- Judul paket -->
                <h3 class="paket-title">Paket Silver</h3>
                <!-- Gambar paket -->
                <div class="pics">
                <img src="img/paket1.jpg" alt="Silver Package">
                </div>
                <!-- Tombol untuk menampilkan deskripsi -->
                <button class="toggle-btn" data-target="deskripsi-silver">Lihat Deskripsi</button>
                <!-- Deskripsi paket -->
                <div id="deskripsi-silver" class="deskripsi">
                <h4>Deskripsi:</h4>
                    <p>
                        Paket Silver dirancang untuk pasangan yang menginginkan pernikahan yang elegan namun terjangkau. Dengan fokus pada dekorasi sederhana namun indah, makanan lezat, dan pengalaman yang tak terlupakan, paket ini cocok untuk acara pernikahan dengan tamu yang lebih kecil.
                    </p>
                    <!-- Paket yang ditawarkan -->
                    <h4>Paket yang Ditawarkan:</h4>
                    <ul>
                        <!-- Daftar fitur paket -->
                        <li>Dekorasi sederhana tapi elegan</li>
                        <li>Makanan ringan dan minuman untuk acara resepsi</li>
                        <li>Fotografi dan video dokumentasi selama acara</li>
                        <li>Hiburan musik live selama resepsi</li>
                        <li>Pilihan gaun pengantin dan jas pengantin</li>
                        <li>Konsultasi perencanaan pernikahan</li>
                    </ul>
                    <!-- Rincian harga -->
                    <h4>Rincian Harga:</h4>
                    <ul>
                        <!-- Daftar harga untuk setiap fitur -->
                        <li>Dekorasi: Rp8.000.000</li>
                        <li>Makanan dan Minuman: Mulai dari Rp50.000 per tamu</li>
                        <li>Fotografi dan Video: Rp5.000.000</li>
                        <li>Hiburan Musik: Rp800.000</li>
                        <li>Gaun Pengantin dan Rias Pengantin: Mulai dari Rp2.500.000</li>
                        <li>Konsultasi Perencanaan: Gratis</li>
                    </ul>
                </div>
                <!-- Garis pemisah -->
                <hr>
            </div>

            <!-- Paket Gold -->
            <div class="paket">
                <!-- Judul paket -->
                <h3 class="paket-title">Paket Gold</h3>
                <!-- Gambar paket -->
                <div class="pics">
                <img src="img/paket2.jpg" alt="Gold Package">
                </div>
                <!-- Tombol untuk menampilkan deskripsi -->
                <button class="toggle-btn" data-target="deskripsi-gold">Lihat Deskripsi</button>
                <!-- Deskripsi paket -->
                <div id="deskripsi-gold" class="deskripsi">
                <h4>Deskripsi:</h4>
                    <p>
                        Paket Gold adalah pilihan yang sempurna untuk pasangan yang menginginkan pernikahan yang mewah dengan sentuhan kelas. Dengan dekorasi yang megah, makanan berkualitas tinggi, dan pelayanan premium, paket ini memberikan pengalaman pernikahan yang tak terlupakan bagi pengantin dan tamu mereka.
                    </p>
                    <!-- Paket yang ditawarkan -->
                    <h4>Paket yang Ditawarkan:</h4>
                    <ul>
                        <!-- Daftar fitur paket -->
                        <li>Dekorasi mewah dengan tema yang dipilih pengantin</li>
                        <li>Makanan 5-star dan minuman premium untuk acara resepsi</li>
                        <li>Fotografi dan video profesional dengan drone</li>
                        <li>Hiburan musik live oleh band terkenal</li>
                        <li>Gaun pengantin dan jas pengantin dari desainer ternama</li>
                        <li>Pengaturan perjalanan bulan madu</li>
                    </ul>
                    <!-- Rincian harga -->
                    <h4>Rincian Harga:</h4>
                    <ul>
                        <!-- Daftar harga untuk setiap fitur -->
                        <li>Dekorasi: Rp10.000.000</li>
                        <li>Makanan dan Minuman: Mulai dari Rp100.000 per tamu</li>
                        <li>Fotografi dan Video: Rp5.000.000</li>
                        <li>Hiburan Musik: Mulai dari Rp2.000.000</li>
                        <li>Gaun Pengantin dan Rias Pengantin: Mulai dari Rp5.500.000</li>
                        <li>Pengaturan Perjalanan Bulan Madu: Harga bervariasi tergantung tujuan</li>
                    </ul>
                </div>
                <!-- Garis pemisah -->
                <hr>
            </div>

    <!-- Paket Platinum -->
    <div class="paket">
    <!-- Judul paket -->
    <h3 class="paket-title">Paket Platinum</h3>
    <!-- Gambar paket -->
    <div class="pics">
    <img src="img/paket3.jpg" alt="Platinum Package">
    </div>
    <!-- Tombol untuk menampilkan deskripsi -->
    <button class="toggle-btn" data-target="deskripsi-platinum">Lihat Deskripsi</button>
    <!-- Deskripsi paket -->
    <div id="deskripsi-platinum" class="deskripsi" style="display: none;">
    <h4>Deskripsi:</h4>
        <p>
            Paket Platinum adalah pilihan untuk pasangan yang menginginkan pernikahan yang tidak ada duanya. Dengan segala yang terbaik dalam dekorasi, makanan, hiburan, dan layanan, paket ini menciptakan pengalaman pernikahan yang mewah dan tak terlupakan untuk pengantin dan tamu mereka.
        </p>
        <!-- Paket yang ditawarkan -->
        <h4>Paket yang Ditawarkan:</h4>
        <ul>
            <!-- Daftar fitur paket -->
            <li>Dekorasi eksklusif dan kreatif sesuai dengan tema yang dipilih</li>
            <li>Makanan gourmet dan minuman premium dari chef terkenal</li>
            <li>Fotografi dan video dengan peralatan terbaru dan tim profesional</li>
            <li>Hiburan musik oleh artis terkenal atau orkestra simfoni</li>
            <li>Gaun pengantin dan jas pengantin kustom dari desainer internasional</li>
            <li>Pengaturan perjalanan bulan madu VIP</li>
        </ul>
        <!-- Rincian harga -->
        <h4>Rincian Harga:</h4>
        <ul>
            <!-- Daftar harga untuk setiap fitur -->
            <li>Dekorasi: Mulai dari Rp15.000.000</li>
            <li>Makanan dan Minuman: Mulai dari Rp150.000 per tamu</li>
            <li>Fotografi dan Video: Mulai dari Rp10.000.000</li>
            <li>Hiburan Musik: Mulai dari Rp5.000.000</li>
            <li>Gaun Pengantin dan Rias Pengantin: Mulai dari Rp8.000.000</li>
            <li>Pengaturan Perjalanan Bulan Madu: Harga bervariasi tergantung tujuan dan fasilitas</li>
        </ul>
    </div>
    <!-- Garis pemisah -->
    <hr>
</div>

<!-- Paket Intimate -->
<div class="paket">
    <!-- Judul paket -->
    <h3 class="paket-title">Paket Intimate</h3>
    <!-- Gambar paket -->
    <div class="pics">
    <img src="img/paket4.jpg" alt="Intimate Package">
    </div>
    <!-- Tombol untuk menampilkan deskripsi -->
    <button class="toggle-btn" data-target="deskripsi-intimate">Lihat Deskripsi</button>
    <!-- Deskripsi paket -->
    <div id="deskripsi-intimate" class="deskripsi" style="display: none;">
    <h4>Deskripsi:</h4>
        <p>
           Paket Intimate adalah pilihan yang cocok untuk pasangan yang menginginkan pernikahan yang pribadi dan berkesan dengan keluarga dan teman terdekat. Dengan fokus pada detail dan kualitas, paket ini memberikan pengalaman pernikahan yang hangat dan intim.
        </p>
        <!-- Paket yang ditawarkan -->
        <h4>Paket yang Ditawarkan:</h4>
        <ul>
            <!-- Daftar fitur paket -->
            <li>Dekorasi sederhana namun indah untuk suasana yang intim</li>
            <li>Pilihan pesta outdoor atau indoor</li>
            <li>Makanan dan minuman favorit pengantin dan tamu terdekat</li>
            <li>Fotografi dokumenter untuk mengabadikan momen-momen spesial</li>
            <li>Hiburan musik akustik atau pianis untuk suasana yang santai</li>
            <li>Pilihan gaun pengantin yang nyaman dan elegan</li>
            <li>Layanan perencanaan pernikahan pribadi</li>
            <li>Pilihan souvenir pernikahan</li>
            <li>Pengaturan perjalanan bulan madu VIP</li>
        </ul>
        <!-- Rincian harga -->
        <h4>Rincian Harga:</h4>
        <ul>
            <!-- Daftar harga untuk setiap fitur -->
            <li>Dekorasi: Rp15.000.000 *outdoor harga menyesuaikan lokasi</li>
            <li>Makanan dan Minuman: Mulai dari Rp250.000 per tamu</li>
            <li>Fotografi dan Video: Rp15.000.000</li>
            <li>Hiburan Musik: Mulai dari Rp8.000.000</li>
            <li>Gaun Pengantin dan Rias Pengantin: Mulai dari Rp8.000.000</li>
            <li>Souvenir Pernikahan: Mulai dari 50.000 per item</li>
            <li>Pengaturan Perjalanan Bulan Madu: Harga bervariasi tergantung tujuan dan fasilitas</li>
            <li>Layanan Perencanaan: Gratis</li>
        </ul>
        <!-- Garis pemisah -->
        <hr>
    </div>
</div>
</div>
</div>

    <!-- Script untuk mengontrol tampilan deskripsi -->
    <script>
        $(document).ready(function() {
            $(".toggle-btn").click(function() {
                var target = $(this).data("target");
                $("#" + target).slideToggle();
            });
        });
    </script>
    
</body>
</html>
