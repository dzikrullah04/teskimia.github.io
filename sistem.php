<?php
    $cssLink = ' <link rel="stylesheet" href="../../library/bootstrap.min.css" />
    <link rel="stylesheet" href="../../library/self.css" />
     ';
    $js = '<script src="../../library/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector("nav");

      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 90) {
          nav.classList.add("bg-dark", "shadow");
        } else {
          nav.classList.remove("bg-dark", "shadow");
        }
      });
    </script>';
    $banner = "../../aset/mountain.jpg";

$Jcard1 = "Alat & Bahan";
$Tcard1 = "Terdiri dari Susu Milo, es batu, air minum, santan, kaleng, baskom, sendok dan Palu.";
$Icard1 = "../../aset/Bahan.jpeg";

$Jcard2 = "Proses Pembuatan";
$Tcard2 = "Memutar Kaleng yang berisi larutan Milo dengan tangan agar terjadinya pembekuan.";
$Icard2 = "../../aset/proses-pemutaran(adaOrangnya).png";

$Jcard3 = "Hasil";
$Tcard3 = "Eskrim buatan kami jadi dengan sempurna dengan pembekuan yang merata dan rasa yang nikmat.";
$Icard3 = "../../aset/Hasil-jadi.png";

$cards = [[$Icard1, $Jcard1, $Tcard1],
[$Icard2, $Jcard2, $Tcard2],
[$Icard3, $Jcard3, $Tcard3],
];


// navbar 
$navbar = '
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
<div class="container">
  <a class="navbar-brand" href="/">Kelompok 1</a>
  <button class="bodas animasi navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse animasi navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="true">
                      BAGIAN
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#I">I. TUJUAN</a></li>
                      <li><a class="dropdown-item" href="#II">II. LANDASAN TEORI</a></li>
                      <li><a class="dropdown-item" href="#III">III. ALAT & BAHAN</a></li>
                      <li><a class="dropdown-item" href="#IV">IV. PROSEDUR KERJA</a></li>
                      <li><a class="dropdown-item" href="#V">V. DATA PENGAMATAN</a></li>
                      <li><a class="dropdown-item" href="#VI">VI. HASIL PEMBAHASAN</a></li>
                      <li><a class="dropdown-item" href="#VII">VII. KESIMPULAN</a></li>
                      <li><a class="dropdown-item" href="#VIII">VIII. LAMPIRAN</a></li>
                  </ul>
              </li>
             
          </ul>
  </div>
</div>
</nav>
';

// alat bahan

$peralatan = [
  "Sendok",
  "Palu",
  "Kaleng",
  "Baskom",
  "Gunting",
  "Gelas"
];
$bahanBahan = [
  "Milo",
  "Es Batu",
  "Garam Kasar",
  "Santen Kara"
];

$langkahLangkah = [
  "Siapkan alat dan bahan yang sudah disiapkan.",  
  "Pecahkan es batu sampai hancur menggunakan palu, lalu masukan es batu yang sudah hancur ke dalam baskom.",  
  "Taruh garam kasar diatas es batu yang sudah dipecahkan tadi, dan letakan kaleng di tengah baskom yang sudah di isi es batu.",  
  "Masukan susu UHT, santan kara, dan pop ice ke dalam kaleng secara bersamaan, dan diaduk dengan merata.",  
  "Dan tutup kaleng secara rapat, kemudian putar kaleng sampai benar-benar mengeras.",  
  " buka kaleng yang sudah di putarkan, lalu Siapkan gelas plastik dan sendok untuk diambil sebagian untuk dicicipi oleh guru.",  
];

$hasilPembahasan = "Dalam pembuatan es krim ini, kami melakukan dua kali cara pembuatan koloid, yang pertama yaitu dispersi yang merupakan tahap dari larutan menjadi koloid yang kami terapkan saat melarutkan susu dan pengocokkan. Saat pengocokkan juga terjadi kondensasi yaitu saat perubahan serbuk es krim menjadi koloid. Agar tidak terjadi koagulasi saat pembuatan es krim, kita melarutkan serbuk es krim menggunakan susu karena pada susu terdapat kasein yang menjadi stabilisator sehingga tidak terjadi koagulasi.";

$kesimpulan = [
  "Semakin tinggi kandungan lemak pada susu, maka tekstur es krim akan semakin lembut.",  
  "Semakin rendah kandungan lemak pada susu, maka tekstur es krim semakin kasar.",  
  "Es krim termasuk jenis koloid emulsi cair, emulsi cair adalah di dispersi kedalam zat cair."
];

?>