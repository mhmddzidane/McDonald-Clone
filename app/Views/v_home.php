<main>
  <!-- card -->
  <h1 style="text-align: center; padding-top: 60px; padding-bottom: 50px; font-weight: bold;">Promo Menarik</h1>
  <div class="container">
    <div class="row">

      <?php foreach ($promo as $key => $value) { ?>
        <div class="col">
          <div class="card border-0 cardmobile" style="width: 20rem;">
            <img src="<?= base_url('img/' . $value['gambar']) ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 style="font-weight: bold;"><?= $value['nama_promo']; ?></h5>
              <p class="card-text" style="color: gray;white-space:nowrap; overflow:hidden;text-overflow:ellipsis;"><?= $value['desc_promo']; ?></p>
              <i class="fa fa-calendar" style="color: red;"></i>
              <p style="color: gray; font-size:small">Berlaku hingga <?= $value['exp'] ?></p>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
  <button type="button" class="btn promo">Lihat Semua Promo</button>
  <!-- akhir card -->

  <!--menu favorit!-->
  <div class="topmenu"></div>
  <div class="menufavor">
    <h1>Menu Favorit</h1>
    <div class="topmenu2"></div>

    <div class="menu owl-carousel owl-theme" style="background-color: #fafafa;">
      <div class="item"><img src="<?= base_url('img/bigmac.png') ?>" alt="">
        <figcaption>BigMac</figcaption>
      </div>
      <div class="item"><img src="img/panas1.png" alt="">
        <figcaption>PaNas 1</figcaption>
      </div>
      <div class="item"><img src="img/panasspecial.png" alt="">
        <figcaption>Panas Special</figcaption>
      </div>
      <div class="item"><img src="img/mcchicken.png" alt="">
        <figcaption>McChicken</figcaption>
      </div>
      <div class="item"><img src="img/mcnugget.png" alt="">
        <figcaption>McNuggets</figcaption>
      </div>
    </div>
    <div class="topmenu2"></div>
    <div class="topmenu3"><button type="button" class="btn promo">Lihat Semua Menu</button></div>
  </div>
  </div>
  <!-- akhit menu favorit -->

  <!--momen-->
  <div class="topmomen"></div>
  <div class="momen">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center">
          <img class="gambar-anak" src="<?= base_url('img/anak.png') ?>" alt="">
        </div>
        <div class="col-lg-6 submomen">
          <h1 style="font-weight: bold; ">Ciptakan momen bahagia<br>untuk si kecil</h1>
          <p>Semua hal seru hanya ada di Dunia Anak McDonald's</p>
          <button type="button" class="btn btnanak">Pelajari selengkapnya</button>
        </div>
        <div class="topmomen"></div>
      </div>
    </div>
  </div>
  <img class="wave" src="https://nos.jkt-1.neo.id/mcdonalds/assets/img/common/graphic-melt.png" alt="">
  <!-- akhir momen -->

  <!-- app -->
  <div class="topapp"></div>
  <div class="app">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1>Makin Hemat & Praktis<br>dengan Aplikasi McDonald's<br>Download Sekarang</h1>
          <img class="appdownload" src="img/app.png" alt="">
        </div>
        <div class="col-lg-6 text-center ">
          <img src="img/appfoto.png" class="appfoto" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- akhir app -->

  <!-- instagram -->
  <div class="topig"></div>
  <div class="instagram">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center">
          <h1>Instagram McDonald's Indonesia</h1>
        </div>
        <div class="col-lg-5 text-center">
          <button type="button" class="btn btnig">Ikuti @mcdonaldsid</button>
        </div>
        <div class="topig"></div>
      </div>
    </div>
  </div>
  <!-- akhit instagram -->

  <!-- galllery -->
  <div class="galeri owl-carousel owl-theme" style="background-color: #fafafa;">
    <div class="items"><img src="<?= base_url('img/galeri1.png') ?>" alt=""></div>
    <div class="items"><img src="<?= base_url('img/galeri2.png') ?>" alt=""></div>
    <div class="items"><img src="img/galeri3.png" alt=""></div>
    <div class="items"><img src="img/galeri4.png" alt=""></div>
    <div class="items"><img src="img/galeri5.png" alt=""></div>
    <div class="items"><img src="img/galeri6.png" alt=""></div>
  </div>
  <!-- akhir galllery -->

  <!-- lowongan -->

  <!-- akhir lowongan -->
  <div class="toplowongan"></div>
  <div class="lowongan">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center">
          <img src="img/crew.png" alt="">
        </div>
        <div class="col-lg-6">
          <h1>Jadilah bagian dari keluarga<br>kami</h1>
          <p>Di McDonald's, kami lebih dari sekadar bisnis. Kami adalah komunitas tempat Anda berlatih keterampilan hidup dan sebagai wadah untuk mengejar serta mewujudkan impianmu.</p>
          <button type="button" class="btn btnlow">Lihat Lowongan</button>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffbc0d" fill-opacity="1" d="M0,256L60,245.3C120,235,240,213,360,208C480,203,600,213,720,234.7C840,256,960,288,1080,266.7C1200,245,1320,171,1380,133.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
  </div>

  <!-- footer -->


</main>
</body>