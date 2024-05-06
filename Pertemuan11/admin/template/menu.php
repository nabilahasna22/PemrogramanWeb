<!--Kode ini berfungsi untuk membuat menu pada website. Kode ini  menyediakan navigasi yang memungkinkan pengguna untuk beralih antar halaman 
atau fitur dalam aplikasi web. Dengan menggunakan struktur sidebar dan menu navigasi, pengguna dapat dengan mudah mengakses berbagai bagian 
dari website dengan mudah.-->

<!DOCTYPE html>
<html>
<head></head>
<body>
<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary"> 
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel"> 
        <div class="offcanvas-header"> 
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Aplikasi Kantor Nabila Hasna</h5> <!-- Judul aplikasi -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button> <!-- Tombol close offcanvas -->
        </div> 
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto"> 
          <ul class="nav flex-column"> <!-- Daftar navigasi utama -->
            <li class="nav-item"> <!-- Item navigasi -->
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="index.php"> <!-- Tautan ke halaman dashboard -->
                <svg class="bi"> 
                    <use xlink:href="#house-fill"/>
                </svg>
                Dashboard <!-- Label Dashboard/Halaman utama -->
              </a>
            </li>
            <li class="nav-item"> <!-- Item navigasi -->
              <a class="nav-link d-flex align-items-center gap-2" href="index.php?page=anggota"> <!-- Tautan ke halaman anggota -->
                <svg class="bi"> 
                    <use xlink:href="#people"/>
                </svg>
                Anggota <!-- Label Halaman anggota -->
              </a>
            </li>
            <li class="nav-item"> <!-- Item navigasi -->
              <a class="nav-link d-flex align-items-center gap-2" href="index.php?page=jabatan"> <!-- Tautan ke halaman jabatan -->
                <svg class="bi"> 
                    <use xlink:href="#puzzle"/>
                </svg>
                Jabatan <!-- Label Halaman jabatan -->
              </a>
            </li>
            <li class="nav-item"> <!-- Item navigasi -->
              <a class="nav-link d-flex align-items-center gap-2" href="#"> 
                <svg class="bi"><use xlink:href="#people"/></svg> 
                Customers <!-- Label Halaman pelanggan -->
              </a>
            </li>
        </ul>
            <li class="nav-item"> <!-- Item navigasi -->
              <a class="nav-link d-flex align-items-center gap-2" href="#"> 
                <svg class="bi"><use xlink:href="#graph-up"/></svg> 
                Reports <!-- Label Halaman laporan -->
              </a>
            </li>
            <li class="nav-item"> <!-- Item navigasi -->
              <a class="nav-link d-flex align-items-center gap-2" href="#"> 
                <svg class="bi"><use xlink:href="#puzzle"/></svg> 
                Integrations <!-- Label Integrasi -->
              </a>
            </li>
          </ul>

          <hr class="my-3"> <!-- Garis pemisah -->

          <ul class="nav flex-column mb-auto"> <!-- Daftar navigasi tambahan -->
            <li class="nav-item"> <!-- Item navigasi -->
              <a class="nav-link d-flex align-items-center gap-2" href="#"> 
                <svg class="bi"> 
                    <use xlink:href="#gear-wide-connected"/>
                </svg>
                Settings <!-- Label Pengaturan -->
              </a>
            </li>
            <li class="nav-item"> <!-- Item navigasi -->
              <a class="nav-link d-flex align-items-center gap-2" href="logout.php"> <!-- Tautan ke halaman logout: Keluar dari aplikasi -->
                <svg class="bi"> 
                    <use xlink:href="#door-closed"/>
                </svg>
                Log out <!-- Label Log out -->
              </a>
            </li>
          </ul>
        </div> 
      </div> 
    </div> 
</body>
</html>