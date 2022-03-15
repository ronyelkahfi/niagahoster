<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/fonts/monserat/stylesheet.css">
    <link rel="stylesheet" href="asset/css/style.css">

    <title>Niagahoster</title>
  </head>
  <body>
  <section class="header  border-bottom">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-6 header-text pt-3 pb-3 cursor-pointer">Gratis Ebook Sembilan Cara Cerdas Menggunakan Domain [x] </div>
        <div class="col-md-4 text-end header-text pt-3 pb-3">
          <div class="row">
            <div class="col-md-4 text-end cursor-pointer"><i class="fa-solid fa-phone"></i> 0274-5305505</div>
            <div class="col-md-4 text-end cursor-pointer"><i class="fa-solid fa-comments"></i> Live Chat </div>
            <div class="col-md-4 text-end cursor-pointer"><i class="fa-solid fa-circle-user"></i> Member Area </div>
          </div>
         
        
        
        </div>
      </div>
    </div>
  </section>
  <nav class="navbar navbar-expand-lg navbar-light border-bottom navigation">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="asset/img/logo.png" alt="Niagahoster" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Hosting</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Domain</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Server</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Website</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Afiliasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Promo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pembayaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Review</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="mt-5 mb-5 pb-5 border-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>PHP Hosting</h1>
        <h2>Cepat, Handal, Penuh dengan modul PHP yang anda butuhkan</h2>
        <ul class="list-with-icon">
          <li>Solusi PHP untuk performa query yang lebih cepat.</li>
          <li>Konsumsi memori yang lebih rendah.</li>
          <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.</li>
          <li>Fitur enkripsi IonCube dan Zend Guard Loaders.</li>

        </ul>
      </div>
      <div class="col-md-6">
        <img src="asset/svg/illustration banner PHP hosting-01.svg" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>
<section class="mt-5 pt-2 mb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3" >
        <div class="frame-image-center mb-3">
          <img src="asset/svg/illustration-banner-PHP-zenguard01.svg" alt="" >
        </div>
        <h5 class="text-center">PHP Zend Guard Loader</h5>
      </div>
      <div class="col-md-3">
        <div class="frame-image-center mb-3">
          <img src="asset/svg/icon-composer.svg" alt="">
        </div>
        <h5 class="text-center">PHP Composer</h5>
      </div>
      <div class="col-md-3">
        <div class="frame-image-center mb-3">
          <img src="asset/svg/icon-php-hosting-ioncube.svg" alt="">
        </div>
        <h5 class="text-center">PHP IonCube Loader</h5>
      </div>
    </div>
  </div>
</section>
<section class="mt-5 mb-5">
<div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Paket Hosting Singapura yang Tepat</h1>
        <h3>Diskon 40% + Domain dan SSL Gratis Untuk Anda</h3>
      </div>
    </div>
    <?php 
      require_once('data.php');
      $data = json_decode($productJson);
    ?>
    <div class="row ps-2 pe-2 mt-5">
      <?php 
      foreach($data as $product){
        $strDiscountPrice = currency_id($product->discount_price);
        $arrDiscountPrice = explode(".",$strDiscountPrice);
        $firstDigit = $arrDiscountPrice[0];
        unset($arrDiscountPrice[0]);
        $secondDigit = implode(".",$arrDiscountPrice);
        // print_r($arrDiscountPrice);
        $discountPrice = "Rp. <font class='first-price align-top'>".$firstDigit."</font>.<font class='align-top'>".$secondDigit."</font>";
      ?>
      <div class="col-md-3 ps-0 pb-3 mb-3  pe-0 box">
      <?= ($product->best_seller==true) ? '<div class="ribbon ribbon-top-left"><span >best Seller</span></div>' : '' ?>
      
        <ul class="list-group">
          <li class="list-group-item text-center <?= ($product->best_seller==true)? 'bg-blue-light light-text' : '' ?>">
            <h3><?= Ucfirst($product->name) ?></h3>
          </li>
          <li class="list-group-item text-center <?= ($product->best_seller==true)? 'bg-blue-light light-text' : '' ?>">
            <h6><del>Rp. <?= currency_id($product->real_price) ?></del></h6>
            <div class="align-top">
            <?= $discountPrice."/".$product->uom ?>
            </div>
          </li>
          <li class="list-group-item text-center <?= ($product->best_seller==true)? 'bg-primary light-text' : '' ?>">
            <h6>
              <?= currency_id($product->user_count) ?> Pengguna Terdaftar
            </h6>
          </li>
          <li class="list-group-item text-center pb-5">
            <?php
            foreach($product->feature as $feature){
              echo '<p>'.(!empty($feature->value)?Ucfirst($feature->value):'').' '.UCwords($feature->feature_name).'</p>';
            }
            ?>
            <button type="button" class="btn <?= ($product->best_seller==true) ? 'btn-primary' : 'btn-outline-dark' ?> btn-rounded">Pilih Sekarang</button>
          </li>

        </ul>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<section class="mt-5 pt-5 mb-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2>Powerfull dengan Limit PHP yang Lebih Besar</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-3">
        <table class="table table-striped text-center  border-start border-end">
          <tr>
            <td><i class="fa-solid fa-circle-check text-success"></i></td>
            <td>max execution time 300s</td>
          </tr>
          <tr>
            <td><i class="fa-solid fa-circle-check text-success"></i></td>
            <td>max execution time 300s</td>
          </tr>
          <tr>
            <td><i class="fa-solid fa-circle-check text-success"></i></td>
            <td>php memory limit 1024</td>
          </tr>
        </table>
      </div>
      <div class="col-md-3">
        <table class="table table-striped text-center border-start border-end">
          <tr class="">
            <td><i class="fa-solid fa-circle-check text-success"></i></td>
            <td>post max size 128 MB</td>
          </tr>
          <tr>
            <td><i class="fa-solid fa-circle-check text-success"></i></td>
            <td>upload max filesize 128 MB</td>
          </tr>
          <tr>
            <td><i class="fa-solid fa-circle-check text-success"></i></td>
            <td>max input vars 2500</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>
<section class="mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Semua Paket Hosting Sudah Termasuk</h2>
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <div class="col-md-3 text-center">
        <img src="asset/svg/icon PHP Hosting_PHP Semua Versi.svg" alt="" width="50">
        <h6>PHP Semua Versi</h6>
        <span>Pilih mulai dari versi 5.3 s/d PHP 7.</span>
        <span>Ubah sesuka anda</span>
      </div>
      <div class="col-md-3 text-center">
        <img src="asset/svg/icon PHP Hosting_My SQL.svg" alt="" width="50">
        <h6>MySQL versi 5.6</h6>
        <span>Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur</span>
      </div>
      <div class="col-md-3 text-center">
        <img src="asset/svg/icon PHP Hosting_CPanel.svg" alt="" width="50">
        <h6>Panel Hosting CPanel</h6>
        <span>Kelola website dengan panel canggih yang familiar di hati anda.</span>
      </div>
    </div>
  </div>
</section>
<section class="mt-5 mb-5">
  <div class="container">
  <div class="row justify-content-center">
      <div class="col-md-3 text-center">
        <img src="asset/svg/icon PHP Hosting_garansi uptime.svg" alt="" width="50">
        <h6>Garansi Uptime 99.9%</h6>
        <span>Datacenter yang mendukung kelangsungan website anda 24/7.</span>
      </div>
      <div class="col-md-3 text-center">
        <img src="asset/svg/icon PHP Hosting_InnoDB.svg" alt="" width="50">
        <h6>Database InnoDB Unlimited</h6>
        <span>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan anda.</span>
      </div>
      <div class="col-md-3 text-center">
        <img src="asset/svg/icon PHP Hosting_My SQL remote.svg" alt="" width="50">
        <h6>Wildcard Remote MySQL</h6>
        <span>Mendukung s/d 25 max_user_connections dan 100 max_connections.</span>
      </div>
    </div>
  </div>
</div>
<section class="mt-5 mb-5">
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12 text-center">
        <h2>Mendukung penuh framework laravel</h2>
      </div>
    </div>
    <div class="row justify-content-center border-bottom mt-5">
      <div class="col-md-5">
        <span>Tak perlu menggunakan dedicated server atau VPS yang mahal.Layanan PHP hosting murah kami mendukung  penuh framework favorit Anda.</span>
        <ul class="list-with-icon">
          <li>Install <strong>1 klik</strong> dengan Softcolous installer.</li>
          <li>Mendukung extensi <strong>PHP MCript, phar, mbstring, json, </stong> dan <stong>fileinfo.</strong></li>
          <li>Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstall package pilihan anda</li>
        </ul>
        <span>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis.</span>
      </div>
      <div class="col-md-5">
        <img src="asset/svg/illustration banner support laravel hosting.svg" alt="">
      </div>
    </div>
  </div>
</section>
<section class="mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Modul lengkap untuk menjalankan aplikasi PHP anda.</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <ul>
          <li>Ice PHP</li>
          <li>apc</li>
          <li>ares</li>
          <li>bcmath</li>
          <li>bcompiler</li>
          <li>big_int</li>
          <li>bitset</li>
          <li>bloomy</li>
          <li>bz2_filter</li>
          <li>clamav</li>
          <li>coin_acceptor</li>
          <li>crack</li>
          <li>dba</li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li>http</li>
          <li>huffman</li>
          <li>idn</li>
          <li>igbinary</li>
          <li>imagick</li>
          <li>imap</li>
          <li>inclued</li>
          <li>inotify</li>
          <li>interbase</li>
          <li>intl</li>
          <li>ioncube_loader</li>
          <li>ioncube_loader_4</li>
          <li>jsmin</li>
          <li>json</li>
          <li>ldap</li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li>nd_pdo_mysql</li>
          <li>oauth</li>
          <li>oci8</li>
          <li>odbc</li>
          <li>opcache</li>
          <li>pdf</li>
          <li>pdo</li>
          <li>pdo_dblib</li>
          <li>pdo_firebird</li>
          <li>pdo_mysql</li>
          <li>pdo_odbc</li>
          <li>pdo_pgsql</li>
          <li>pdo_sqlite</li>
          <li>pgsql</li>
          <li>phalcon</li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li>stats</li>
          <li>stem</li>
          <li>stomp</li>
          <li>suhosin</li>
          <li>sybase_ct</li>
          <li>sysvmsg</li>
          <li>sysvsem</li>
          <li>sysvshm</li>
          <li>tidy</li>
          <li>timezonedb</li>
          <li>trader</li>
          <li>translit</li>
          <li>uploadprogress</li>
          <li>uri_template</li>
          <li>uuid</li>
        </ul>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12 text-center">
      <button type="button" class="btn btn-outline-dark btn-rounded">Selengkapnya</button> 
      </div>
    </div>
  </div>
</section>
<section class="mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
            <h1>Linux Hosting yang Stabil dengan Teknologi LVE</h1>
            <span>
              SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128 GB</strong> dan teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching. Apache load balancer berbasis LiteSpeed Technologies, <strong>CageFS</strong> security, <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP anda.
            </span>
            <div>
              <a href="" class="btn btn-primary">Pilih Hosting Anda</a>
            </div>
            
      </div>
      <div class="col-md-6">
            <img src="asset/img/Image support.png" alt="">
      </div>
    </div>
  </div>
</section>
<section class="mt-5 mb-5">
  <div class="container">
    <div class="row pt-3 pb-3">
        <div class="col-md-6">Bagikan jika anda menyukai halaman ini</div>
        <div class="col-md-6"></div>
    </div>
  </div>
</section>
<section class="bg-primary pt-5 pb-5">
  <div class="container">
    <div class="col-md-6 help-text">
        <span>Perlu <strong>BANTUAN?</strong> Hubungi Kami: <strong>0274-5305505</strong></span>
    </div>
  </div>
</section>
<section class="bg-dark pt-5 pb-5 footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5 class="footer-label">HUBUNGI KAMI</h5>
        <ul class="footer-list">
          <li>0274-5305505</li>
          <li>Senin - Minggu</li>
          <li>24 Jam Non Stop</li>
        </ul>
        <ul class="footer-list">
          <li>Jl. Selokan mataram Monjali</li>
          <li>karangjati MT I/304</li>
          <li>Sinduadi, Mlati, Sleman</li>
          <li>Yogyakarta 55284</li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="footer-label">LAYANAN</h5>
        <ul class="footer-list">
          <li><a class="footer-link" href="">Domain</a></li>
          <li><a class="footer-link" href="">Share Hosting</a></li>
          <li><a class="footer-link" href="">Cloud VPS Hosting</a></li>
          <li><a class="footer-link" href="">Managed VPS Hosting</a></li>
          <li><a class="footer-link" href="">Web Builder</a></li>
          <li><a class="footer-link" href="">Keamanan SSL/HTTPS</a></li>
          <li><a class="footer-link" href="">Jasa Pembuatan Website</a></li>
          <li><a class="footer-link" href="">Program Afiliasi</a></li>

        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="footer-label">SERVICE HOSTING</h5>
        <ul class="footer-list">
          <li><a class="footer-link" href="">Hosting Murah</a></li>
          <li><a class="footer-link" href="">Hosting Indonesia</a></li>
          <li><a class="footer-link" href="">Hosting Singapura SG</a></li>
          <li><a class="footer-link" href="">Hosting PHP</a></li>
          <li><a class="footer-link" href="">Hosting Wordpress</a></li>
          <li><a class="footer-link" href="">Hosting Laravel</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="footer-label">TUTORIAL</h5>
        <ul class="footer-list">
          <li><a class="footer-link" href="">Knowledgebase</a></li>
          <li><a class="footer-link" href="">Blog</a></li>
          <li><a class="footer-link" href="">Cara Pembayaran</a></li>
        </ul>
      </div>
    </div>
    </div>
</section>
<section class="bg-dark pt-2 pb-1 footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5 class="footer-label">TENTANG KAMI</h5>
        <ul class="footer-list">
          <li><a class="footer-link" href="">Tim Niagahoster</a></li>
          <li><a class="footer-link" href="">Karir</a></li>
          <li><a class="footer-link" href="">Events</a></li>
          <li><a class="footer-link" href="">Penawaran &amp; Promo Spesial</a></li>
          <li><a class="footer-link" href="">Kontak Kami</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="footer-label">KENAPA PILIH NIAGAHOSTER?</h5>
        <ul class="footer-list">
          <li>Support Terbaik</li>
          <li>Garansi Harga Termurah</li>
          <li>Domain Gratis Selamanya</li>
          <li>Datacenter Hosting Terbaik</li>
          <li>Review Pelanggan</li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="footer-label">NEWSLETTER</h5>
        <input type="text" placeholer="Email" name="email" class="form-control">
        <button type="button" class="btn btn-primary">Berlangganan</button>
        <p>Dapatkan promo dan konten menarik dari penyedia hosting terbaik anda</p>
      </div>
      <div class="col-md-3">
        <div class="row">
          <div class="col-md-4">
            <a class="footer-link" href=""><i class="fa-brands fa-facebook-f"></i></a> 
          </div>
          <div class="col-md-4">
            <a class="footer-link" href=""><i class="fa-brands fa-twitter"></i></a>  
          </div>
          <div class="col-md-4">
            <a class="footer-link" href=""><i class="fa-brands fa-google-plus-g"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-dark pt-5 pb-1 footer">
  <div class="container">
    <h5 class="footer-label">PEMBAYARAN</h5>
    <ul class="list-group bg-dark list-group-horizontal">
      <li class="list-group-item bg-dark ps-0 pe-0">
        <img src="asset/img/bca.png" alt="">
      </li>
      <li class="list-group-item bg-dark ps-0 pe-0"><img src="asset/img/mandiri.png" alt=""></li>
      <li class="list-group-item bg-dark ps-0 pe-0"><img src="asset/img/bni.png" alt=""></li>
      <li class="list-group-item bg-dark ps-0 pe-0"><img src="asset/img/visa.png" alt=""></li>
      <li class="list-group-item bg-dark ps-0 pe-0"><img src="asset/img/mastercard.png" alt=""></li>
      <li class="list-group-item bg-dark ps-0 pe-0"><img src="asset/img/atmbersama.png" alt=""></li>
      <li class="list-group-item bg-dark ps-0 pe-0"><img src="asset/img/permatabank.png" alt=""></li>
      <li class="list-group-item bg-dark ps-0 pe-0"><img src="asset/img/prima.png" alt=""></li>
      <li class="list-group-item bg-dark ps-0 pe-0"><img src="asset/img/alto.png" alt=""></li>
  </ul>
  <p class="footer-label">Aktivasi instan dengan e-Payment. Hosting dan domain  langsung aktif!</p>
  </div>
</section>
<section class="bg-dark pt-2 footer">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>Copyright &copy;2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta </p>
        <p>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
      </div>
      <div class="col-md-4 text-end">
        <p><a href="" class="footer-link">Syarat dan Ketentuan</a> | <a href="" class="footer-link">Kebijakan Privasi</a></p>
      </div>
    </div>
  </div>
</section>
<!-- 

<section class="mt-5 mb-5">
  <div class="container">
    
   
    
    
    
  </div>

</section>
<section class="bg-light" >
  <div class="container">
    <div class="row pt-3 pb-3">
      <div class="col-md-6">Bagikan jika anda menyukai halaman ini</div>
    <div class="col-md-6"></div>
  </div>
</div>  

</section>

<section>

</section> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/48a99d070e.js" crossorigin="anonymous"></script>
  </body>
</html>