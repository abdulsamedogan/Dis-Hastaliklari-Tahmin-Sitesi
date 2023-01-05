<html lang="tr">
<head>
    <title></title>
    <meta charset="utf-8">

    <link  rel="stylesheet" href="css/Menu.css">
    <link rel="stylesheet" href="css/agizBakim.css">
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
      <h3 >Doğru Fırçalama Nasıl Yapılır?</h3>
      <br>
      <div class="bilgi">


      <ol class="bilgi">
        <li>Genel kanı diş fırçasının fırça boyunca diş macunu sürecek oranda macun kullanmak olsa da bezelye tanesi büyüklüğünde diş macunu kullanmanız yeterli olacaktır.</li>
        <li>Fırça uçları diş etlerinize bakacak şekilde 45° açıyla diş fırçanızı tutmalısınız.</li>
        <li>Çok bastırmadan, nazikçe dairesel ve diş etinizden dişinize doğru hareketlerle, dişlerinizin dış yüzeylerini fırçalayabilirsiniz.</li>
        <li>Temel hareket yönümüz pembeden beyaza yani diş etinden dişe doğru olmalıdır.</li>
        <li>Aynı hareketleri iç yüzeyler için de yapmayı unutmayın. Yani yine diş etinden dişe hareketler.</li>
        <li>Dişlerinizin çiğneme kısmı dediğimiz üst alanlarında ileri-geri çekme hareketini kullanabilirsiniz.</li>
        <li>Dilinizin yüzeyini de temizlemeyi ihmal etmeyin. Bu alan için kimi diş fırçalarının arka yüzünde özel bir tabaka kullanılır.</li>
        <li>Günde 2 kez 3’er dk. Fırçalama yapmalısınız.</li>
        <li>Fırçalama bittikten sonra diş macununu tükürmeniz yeterlidir. Ağzınızı su ile uzun süre çalkalayarak tükürmek diş macununun etkisini azaltacaktır.</li>
      </ol>
        </div>
        <div class="fırca">
          <img src="resimler/a.jpg" alt="">

        </div>
    </div>
      <header class="bar">
        <h3>İletişim</h3>

        <h4>Abdül Samed Doğan --- Harun Yakut</h4>
      </header>

    </body>
  </html>
