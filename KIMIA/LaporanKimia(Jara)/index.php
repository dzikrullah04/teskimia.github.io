<?php 
require "../../sistem.php";
require "teks.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $nama ?></title>
    <?php echo $cssLink; ?>
    <link rel="icon" type="image/x-icon" href="/aset/brand.png">
    <style>
        @keyframes SlideInLeft {
            from {
                transform: translateX(-300px);
            }
            to {
                transform: translateX(0px);
            }
        }
      .banner-image {
        background-image: url('<?= $banner?>');
        background-size: cover;
        
      }
      .masuk1 {
        animation-name: SlideInLeft;
        animation-duration: .7s;
        animation-timing-function: ease-in;
        animation-delay: .7s;
      }
      .masuk2 {
        animation-name: SlideInLeft;
        animation-duration: .8s;
        animation-timing-function: ease-in;
        animation-delay: .8s;
      }

      .animasi {
        /* transition-property: ; */
      }
    </style>
  </head>
  <body>
    <!-- Navbar  -->
   <?= $navbar?>
<style>
    p {
        text-align: justify;
        
    }
    .coy {
        text-indent: 40px;
    }
</style>
    <!-- Banner Image  -->
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    >
      <div class="content text-center">
        <h1 class="text-white masuk1">PRATIKUM KOLOID</h1>
        <h4 class="text-white masuk2"><?= $nama ?></h4>
        <h5 class="text-white masuk2">Kelompok 1</h5>
      </div>
    </div>

    <!-- Main Content Area -->
    <h1 style="margin-top: 15px; margin-left: 30px;"> LAPORAN PRAKTIKUM KIMIA KOLOID
    </h1>
    <p></p>
    <div class="container my-5 d-grid gap-5">
        <div id="I"></div>
      <div class="p-5 border">
        <h2  style="font-family: 'Times New Roman', Times, serif;">I. TUJUAN</h2>
        <p class="coy" style="text-align: justify;">
            Adapun tujuan dari praktikum kali ini untuk mengetahui pembuatan dan sifat dari beberapa jenis bahan pangan dan untuk mempelajari sifat-sifat koloid dengan cara membuat eskrim.
        </p>
      </div>
      <div id="II"></div>

      <div class="p-5 border">
        <h2  style="font-family: 'Times New Roman', Times, serif;">II. LANDASAN TEORI</h2>

        <?php foreach ($landasanTeori as $teori): ?>
        <p class="coy">
          <?= $teori[1] ?>
        </p>
        <p class="sumber"><?= $teori[0] ?></p>
        <?php endforeach?>
      </div>
      <div id="III"></div>

      <div class="p-5 border">
        <h2  style="font-family: 'Times New Roman', Times, serif;">III. ALAT & BAHAN</h2>
        <div class="d-flex" style="margin-top: 15px;">
            <div>
                <h6>Alat :</h6>
                <?php foreach ($peralatan as $alat) :?>
                <li><?= $alat?></li>
                <?php endforeach ?>
            </div>
            <div style="margin-left: 70px;">
                <h6>Bahan :</h6>
                <?php foreach ($bahanBahan as $bahan) :?>
                <li><?= $bahan?></li>
                <?php endforeach ?>
            </div>
        </div>
        </div>
        <div id="IV"></div>

      <div class="p-5 border">
        <h2  style="font-family: 'Times New Roman', Times, serif;">IV. PROSEDUR KERJA</h2>
        <?php for ($i = 0; $i< count($langkahLangkah); $i++) :?>
        <div class="d-flex">
            <h6 style="margin-right: 10px;"><?= $i + 1 ?>. </h6>
            <p>
                <?= $langkahLangkah[$i]?>
            </p>
        </div>
        <?php endfor ?>
      </div>
      <div id="V"></div>

      <div class="p-5 border">
        <h2 style="font-family: 'Times New Roman', Times, serif;">V. DATA PENGAMATAN</h2>
<style>
    tr, th, td{
        border: solid;
    }
    .teks-tabel{
        text-align: center;
    }
    .bungkus-kartu {
        margin-top: 25px;
        gap: 24px;
    }
</style>
        <table border="1" style="border-collapse: collapse; width: 100%; border: solid;">
            <tr>
                <th class="tabel"><p class="teks-tabel">No.</p></th class="tabel">
                <th class="tabel"><p class="teks-tabel">MENU</p></th >
                <th class="tabel"><p class="teks-tabel">WAKTU</p></th >
                <th class="tabel"><p class="teks-tabel">HASIL</p></th >
                
            </tr>
            <tr>
                <td><p class="teks-tabel">1</p></td>
                <td><p class="teks-tabel">SUSU MILO</p></td>
                <td><p class="teks-tabel">45 Menit</p></td>
                <td><p class="teks-tabel">Berhasil (Larutan Susu Milo Mengeras / Membeku)</p></td>
            </tr>
        </table>
      </div>
      <div id="VI"></div>
      <div  class="p-5 border">
        <h2  style="font-family: 'Times New Roman', Times, serif;">VI. HASIL PEMBAHASAN</h2>
        <p class="coy" style="text-align: justify;">
            Dalam pembuatan es krim ini, kami melakukan dua kali cara pembuatan koloid, yang pertama yaitu dispersi yang merupakan tahap dari larutan menjadi koloid yang kami terapkan saat melarutkan susu dan pengocokkan. Saat pengocokkan juga terjadi kondensasi yaitu saat perubahan serbuk es krim menjadi koloid. Agar tidak terjadi koagulasi saat pembuatan es krim, kita melarutkan serbuk es krim menggunakan susu karena pada susu terdapat kasein yang menjadi stabilisator sehingga tidak terjadi koagulasi.
        </p>
      </div>
      <div id="VII"></div>

      <div class="p-5 border">
        <h2 style="font-family: 'Times New Roman', Times, serif;">VII. KESIMPULAN</h2>
        <p style="text-align: justify;">
            Berdasarkan hasil praktikum yang sudah dilakukan adapun kesimpulan yang diperoleh, yaitu:
        </p>
        <?php for ($i = 0; $i < count($kesimpulan); $i++) :?>
        <div class="d-flex">
            <h6 style="margin-right: 10px;"><?=$i + 1 ?>.</h6>
            <p><?= $kesimpulan[$i] ?></p>
      </div>
      <?php endfor ?>
      </div>
      <div id="VIII"></div>
      <div  class="p-5 border">
        <h2  style="font-family: 'Times New Roman', Times, serif;">VIII. LAMPIRAN</h2>
        <!-- Card Img Start -->
        <div class="bungkus-kartu d-flex flex-wrap">
          <?php foreach($cards as $card) : ?>
        <div class="card" style="width: 18rem;">
          <img src="<?= $card[0]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $card[1]?></h5>
            <p class="card-text"><?= $card[2] ?></p>
          </div>
        </div>
        <?php endforeach?>
    </div>
        <!-- Card iMG eND -->
    </div>
      <h1>yang belum kelar itu ada itu daftar pusataka, dan lampiran. oh iya ini semua kata katanya minjam dari temen jadi ini baru inspirasinya aja. nanti kita ubah ya kata katanya. sama video nya juga di edit terus masukin ke yutub (pas lagi buatnya).
      </h1>

    </div>
    <!-- end content -->
    <?php echo $js; ?>
  </body>
</html>

