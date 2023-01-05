<html lang="tr">
<head>
    <title></title>
    <meta charset="utf-8">

    <link type="text/css" rel="stylesheet" href=" css/menu.css">
    <link type="text/css" rel="stylesheet" href="css/dr.css">
</head>

<body>

  <nav class="menu">
    <ul>
    <li><a href="anasayfa.php">Ana Sayfa</a></li>
    <li><a href="#">Ağız Bakım</a>
    <ul>
    <li ><a href="dogruDis.php"> Doğru Fırçalama Nasıl Yapılır? </a>  </li>
  <li ><a href="agizBakimSuyu.php"> Ağız Bakım Suyu Nasıl Kullanılır? </a>  </li>
    <li ><a href="disIpi.php"> Diş İpi Nasıl Kullanılır? </a>  </li>
      </ul>
    </li>
    <li> <a href="soruntespit.php">Diş Bot</a> </li>
    <li><a href="#">Uzmanlarla İletişim</a>
      <ul>

        <li><a href="drSD.php">Prof.Dr.Birkan Taha ÖZKAN</a></li>
        <li><a href="#">Dr.Harun Yakut</a></li>
        <li><a href="#">Dr.Eyüp Burak Ceyhan</a></li>
      </ul>
    </li>
    <li><a href="#">Sohbetlerde bul</a>

    </li>

    <?php
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

     ?>
    <b class="isim">Merhaba, <?php echo $_SESSION['name']; ?></b>
          <a  class="buton2" href="kullanıcıSistemi/logout.php">Çıkış Yap</a>


    <?php
    }else{
     ?>
     <a class="buton2" href="kullanıcıSistemi/login.php">Giriş Yap</a>

     <a class="buton2" href="kullanıcıSistemi/signup.php">Kayıt Ol</a>


     <?php



     }
      ?>
    </ul>
  </nav>

    <div class="vr">
      <br><br><br>
      <div class=" drFoto">
      <img src="resimler/doktor.jpg">
      </div>
      <p class="isim">Prof.Dr Birkan Taha ÖZKAN </p>
      <p class="meslek">Ağız Diş ve Çene Cerrahisi Uzmanı</p>
      <br>
      <div class="butonort">
        <a href="drSD.php" class="buton"><span>İletişime Geç</span></a>
      </div>
      <br><br>
      <h3 class="hakkında">Prof.Dr Birkan Taha ÖZKAN Hakkında...</h3>
      <p class="hakkındaprgf">Türkiye’de diş hekimi denildiğinde akla ilk gelen isimlerden biris olan Dr. Özkan; ağız, diş ve çene cerrahisi uzmanıdır. Mersin’de diş hekimi olarak hizmet vermektedir. Prof. Dr. Özkan, yalnızca hizmet bakımından pratik olarak çalışma hayatında değil, aynı zamanda çene cerrahisi alanında akademik üretim süreçlerinin de bizzat içinde. Türkiye’de çok sayıda çene cerrahisi uzmanının yararlandığı Çene Cerrahisi kitabı, bizzat doktor tarafından yazılan oldukça değerli bir akademik kaynaktır.Özellikle çene estetiği ve çene cerrahisi işlemlerinin son derece riskli işlemler olduğu düşünüldüğünde, güvenle Dr. Özkan’ı tercih etmek sizin için de iyi bir seçenek olabilir. Mersin diş hekimi arayışında olanlar için de Prof. Özkan, profesyonel tedavi süreçleri ile harika bir seçenektir.</p>

    </div>
    <header class="bar">
      <h3>İletişim</h3>

      <h4>Abdül Samed Doğan --- Harun Yakut</h4>
    </header>

    </body>
  </html>
