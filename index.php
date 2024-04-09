<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- UNICONS -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
  <title>SPK Wisata</title>
  <link rel="icon" href="https://www.pinclipart.com/picdir/big/7-75302_clip-art-transparent-library-world-png-jokingart-com.png">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="assets/style_item.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container navbar">
      <a class="navbar-brand text-decoration-none mb-0 brandd text-success" href="index.php">
        <i class="uil uil-bus-school fs-5" width="30px"></i>
        <strong>SPK Wisata</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-decoration-none active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#destination">Tempat Wisata</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link text-decoration-none" href="#parameter">Panduan Penggunaan</a>
          </li>-->
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="fuzzy-wisata.php" class="btn text-decoration-none rounded-pill btn-success mx-lg-2">
              Cari Wisata
            </a>
          </li>
          <li class="nav-item">
            <a class="btn text-decoration-none rounded-pill btn-outline-success" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME -->
  <section>
    <div class="flex-container container mt-5">
      <div class="flex-item-left">
        <h3 class="display-4"><strong><strong>Web Pemilihan Objek Wisata di Kota Manado</strong></strong></h3>
        <label class="home_subtitle mt-1 text-muted">Web ini merupakan sistem pendukung keputusan pemilihan destinasi wisata di kawasan Kota Manado. Yuk! cari destinasi wisata mu disini berdasarkan kriteria kamu inginkan!</label> <br>
        <a href="fuzzy-wisata.php" class="btn text-decoration-none rounded btn-success mt-3 py-3">
          Cari Wisata &nbsp;<i class="uil uil-location-arrow button_icon"></i>
        </a>
      </div>
      <div class="flex-item-right">
        <img src="assets/hiking.png" class="img-fluid rounded-3" alt="">
      </div>
    </div>
    <div class="container home_scroll-button mt-2">
      <a href="#destination">
        <label class="ms-4 text-muted"><i class="uil uil-mouse-alt h3"></i>scroll down</label>
      </a>
    </div>
  </section>

  <!-- ITEM -->
  <section class="container my-5" id="destination">
    <span class="text-success d-flex justify-content-center"><small>Tempat</small></span>
    <h3 class="text-center mb-4">Wisata</h3>
    <div class="body_item">
      <div class="wrapperr owl-carousel">
          <?php
            include_once "koneksi.php";
            $sql = "SELECT nama_alternatif, deskripsi, gambar, urlmap FROM alternatif ORDER BY id_alternatif DESC";
            ($resultset = mysqli_query($db, $sql)) or die("database error:" . mysqli_error($db));
            while ($record = mysqli_fetch_assoc($resultset)) { ?>
                <div class="card_destination">
                    <img src="<?php echo $record["gambar"]; ?>" style="width: 270px">/>
                    <div class="infoo">
                        <h5><?php echo $record["nama_alternatif"]; ?></h5>
                        <p><small><small><?php echo $record["deskripsi"]; ?></small></small></p>
                        <a target="_blank" href="<?php echo $record["urlmap"]; ?>"><small><small>Lihat </small><i class="uil uil-plane-departure"></i></small></a>
                      </div>
                </div>
          <?php } ?>
      </div>
    </div>
  </section>

  <!-- VIDEO -->
  <section>
      <div class="container">
        <span class="text-success d-flex justify-content-center"><small>Rekomendasi</small></span>
        <h3 class="text-center mb-2">Taman Laut Bunaken</h3>
      <div class="flex-container mt-2">
      <div class="flex-item-left">
          <h5 class="video_title">Bunaken, Feel the Glimpse of Sea Life in The Majestic Seagarden</h5>
          <label class="text-muted"><small><small>Liang Beach, Bunaken, Wori, North Sulawesi</small></small></label>
          <p class="video_p">"Within the Bunaken Marine Park, visitors can see various strange and colourful marine life along its sea bed. For those who enjoy scuba diving, this is a great place to be. With about 20 dive spots to choose from, divers will have the chance to swim below the sea, and frolic joyfully while admiring the sea creatures."</p>
          <a href="https://maps.app.goo.gl/ihzjfs5m6zdrHpC19" target="_blank" class="btn text-decoration-none rounded-pill btn-success mt-2 py-3">
            Lihat &nbsp;<i class="uil uil-map-pin-alt button_icon"></i>
          </a>
      </div>
      <div class="flex-item-right">
        <a href="https://www.youtube.com/watch?v=XW5Op06q2yA" target="_blank">
            <img class="img-fluid rounded-3" src="https://www.goodnewsfromindonesia.id/wp-content/uploads/images/source/poerdiepew/20192606Flora-fauna-bunaken.jpg" alt=""/>
        </a>
      </div>
    </div>
      <div class="container">
      <div class="video_row">
        <div class="video_item">
          <h5>Fasilitas</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Banyak <br> <label class="text-muted"><small><small>Memperoleh Nilai 6</small></small></label>
            </label>
          </div>
        </div>
        
        <div class="video_item">
          <h5>Harga</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Mahal <br> <label class="text-muted"><small><small>Rp. 150.000</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Jarak dari Pusat Kota</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Jauh <br> <label class="text-muted"><small><small>13 KM</small></small></label>
            </label>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <!-- PARAMETERS -->
  <center>
    <div class="container" id="parameter">
      <div class="parameter_img">
        <div>
          <span><small>Parameter</small></span>
          <h4>Parameter Yang Digunakan</h4>
        </div>
        <div class="parameter_text">
          <h5 class="parameter1"><i class="uil uil-map-pin-alt"> </i> Jarak</h5>
          <h5 class="parameter2"><i class="uil uil-bill"> </i> Harga</h5>
          <h5 class="parameter4"><i class="uil uil-star"> </i> Fasilitas</h5>
          <h5 class="parameter5"><i class="uil uil-sign-alt"> </i> Parkiran</h5>
          <h5 class="parameter3"><i class="uil uil-camera-plus"> </i> Spot Foto</h5>
        </div>
      </div>
    </div>
  </center>

  <!-- Alghoritma
  <div class="container my-5">
    <span class="text-success d-flex justify-content-center"><small>Bantuan</small></span>
    <h3 class="text-center mb-4">Penggunaan Sistem</h3>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/panduan.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/panduan1.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Parameter Harga
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/Fungsi Keanggotaan Harga.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/Rumus Fungsi Keanggotaan Harga.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Parameter Fasilitas
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/Fungsi Keanggotaan Fasilitas.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/Rumus Fungsi Keanggotaan Fasilitas.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Parameter Spot Foto
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/Fungsi Keanggotaan Spot Foto.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/Rumus Fungsi Keanggotaan Spot Foto.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->

  <footer class="bodyy">
    <div class="containerrr">
      
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
      $(".wrapperr").owlCarousel({
        loop: true,
        autoplay: true,
        stagePadding: 10,
        margin:0,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        autoHeight:true
      });
    </script>

</body>

</html>