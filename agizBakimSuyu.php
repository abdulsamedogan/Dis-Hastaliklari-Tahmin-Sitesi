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
      <h3 >Ağız Bakım Suyu Nasıl Kullanılır?</h3>
      <br>
      <div class="agizBakimSuyu">
        <img class="bakimSuyuResim" src="resimler/agiz-bakim-suyu.jpg" alt="">
      </div>

      <div class="bilgi">
        <h4 class="bilgi">Ağız bakım suyu kullanımı ve faydaları</h4>
        <br>
        <p class="bilgi">Ağız ve diş sağlığını korumanın en temel yolu dişlerinizi düzenli ve düzgün bir şekilde temizlemektir.
           Bu amaçla tam ağız bakımı için gerekli malzeme; diş fırçası, diş macunu, diş ipi, ara yüz fırçası ve ağız bakım suyudur.</p>
          <br>
        <p class="bilgi">Diş fırçasının ulaşamadığı alanlarda diş ipi ve arayüz fırçaları kullanılabilse de bakteri oluşumunu önlemek ve uzun vadede ağız sağlığını korumak için en etkili çözüm ağız bakım suyudur.
          Gargara yapmanın temel amacı nefesi ferahlatmaktır. Ancak şiddetli ve kronik ağız kokusunu gidermek için diş hekimine başvurarak uygun bir tedavi planı değerlendirilmelidir.
          Ağız bakımı, zararlı asidik bileşenleri (dişlerde plak oluşumunu) önleyerek diş problemlerini önleyebilir. Ancak günlük ağız bakımı diş fırçası ve diş ipi ile yapılmalıdır.
          Ayrıca diş hekimleri, diş eti sorunlarını çözmek ve tedavi etmek için bazı özel ağız bakım suyu kullanılmasını önermektedir. Genellikle ağız kokusu olan kişilerde nefesini tazelemek için kullanılır.
           Ancak ağız bakım suyu, bireysel ihtiyaçlara göre çeşitli seçeneklerde kullanım imkanı sağlar.
          Plak ve diş çürümesini önlemek veya diş eti problemlerini kontrol altına almak için diş hekiminizle birlikte ağız bakım suyunuzu tercih etmeniz önerilir.</p>
          <br>
          <h4 class="bilgi">Ağız bakım suyunun doğru kullanımı için yapılması gerekenler nelerdir?</h4>
          <br>
          <ol class="liste">
            <li> Doğru ve düzenli kullanım </li>
            <br>
            <p>Ağız boşluğu ve diş sağlığını korumak için dişlerinizi düzenli olarak fırçalamak, diş fırçasının ulaşamadığı alanlarda diş ipi ve ara yüz fırçaları kullanmak gerekir. Ayrıca kişisel ağız yapısına uygun diş fırçası ve diş macunu seçimi de oldukça önemlidir.
              Her gün ağzı temizledikten sonra bakteri üremesini önlemek ve tazeliğini solumak için uygun ağız bakım suyu kullanılmalıdır.</p>
              <br>
            <li> Tek başına ağız bakımı için yeterli olmadığının bilinmesi gerekir </li>
            <br>
            <p>Tek başına ağız bakım suyu asla ideal ağız hijyenini sağlayamaz. Diğer bir deyişle ağız bakım suyunun, diş temizliğinde geleneksel diş fırçalarının yerini alamayacağı bilinmelidir.
            Bu nedenle ağız sağlığı konusunda diş hekiminize danışmanız ve ağız bakım suyunu doğru ve etkili bir şekilde nasıl kullanacağınız konusunda bilgi almanız daha iyidir.</p>
            <br>
            <li> Yeterli süre ne kadardır? </li>
            <br>
            <p>Gargaranın tüm ağız boşluğuna nüfuz etmesi ve etkili koruma sağlaması için ağzın yeterli süre çalkalanması gerekir.
              Genellikle ağzınızı en az 30 saniye ile 1 dakika arasında gargara ile çalkalamanız önerilir.</p>

          </ol>

        </div>
    </div>
      <header class="bar">
        <h3>İletişim</h3>

        <h4>Abdül Samed Doğan --- Harun Yakut</h4>
      </header>

    </body>
  </html>
