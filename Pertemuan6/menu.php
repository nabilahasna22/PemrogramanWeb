<?php
// Array menu yang berisi daftar menu utama dan submenu jika ada
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ]
        ],
    ],
    [
        "nama" => "Kuliner"
    ],
    [
        "nama" => "Hiburan"
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];
// Fungsi untuk menampilkan menu bertingkat
function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>"; // Mulai tag <ul> untuk daftar menu
    // Iterasi setiap item dalam array menu
    foreach ($menu as $item) {
        echo "<li>" . $item['nama']; // Menampilkan nama menu dalam tag <li>

        // Jika menu memiliki submenu, panggil fungsi rekursif untuk menampilkan submenu
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }

        echo "</li>"; // Menutup tag <li>
    }
    echo "</ul>"; // Menutup tag <ul> untuk daftar menu
}

// Memanggil fungsi untuk menampilkan menu bertingkat dengan array $menu sebagai parameter
tampilkanMenuBertingkat($menu);
?>
