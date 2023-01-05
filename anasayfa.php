
<html lang="tr">
<head>
    <title></title>
    <meta charset="utf-8">

    <link  rel="stylesheet" href="css/Menu.css">
    <link rel="stylesheet" href="css/anasayfa.css">
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
      <h1 class="baslik1">AĞIZ VE DİŞ SAĞLIĞI NEDİR?</h1>
      <br>
      <img class="foto1 " src="resimler/proje.png">
      <p class="paragraf">Ağız besinlerin sindirim sistemine giriş kapısıdır. Ağız ve dişlerin sağlığındaki bozukluklar öncesinde sindirim sistemini daha sonrasında tüm vücudu etkileyebilmektedir. Ağız ve diş sağlığı nedir sorusu sorulduğunda bütün bir sistemi düşünmemizin etkisi büyük oluyor. Sindirim sisteminin ilk basamağı olan ağızda besinler dişler tarafından öğütülür, küçük parçalara ufalanır, tükürüğün içerisindeki enzimlerle kimyasal olarak da çözülür. Dişlerimizi besin öğütme dışında konuşmadaki seslerin çıkarımı, estetik görünüm üzerinde de etkileri mevcuttur.</p>

      <hr class="cizgi" />

      <img class="foto2" src="resimler/foto.png">
      <p class="p2">Sağlık ağızla başlar.Ağız ve diş sağlığı bu yüzden çok önemlidir. Ağız ve diş sağlığı nedir sorusunun her daim önemi olmuştur, bu sorular toplumun ağız ve diş sağlığına verdiği önemi arttırır, toplumun bilinç seviyesini yükseltir.Ağız ve diş sağlığı hastalıkları dişeti hastalıkları,diş çürükleri,diş şekil ve konum bozuklukları,diş sıkma,gömülü diş problemleri sayılabilir. Ağız ve diş sağlığının bozukluğu durumunda sadece sindirim sistemi etkilenmez. Sindirim sisteminin yanı sıra kalp sistem hastalıkları, diyabet,immünsupresif hastalıklar,gebelik durumlarını da etkilemektedir. Dişeti hastalıkları,diş çürükleri bulunan hastalar enfeksiyon açısından her zaman potansiyeli yüksek hastalardır. Oral bölgedeki enfeksiyon kalp hastalıkları, immünsupresif hastalıkları bulunan hastalarda her zaman risktir. Kalp hastalığı bulunan hastalarımızın endokardit riskini minimuma indirmek için ağzında hiçbir çürük bulunmaması ve dişetlerinin sağlıklı olması gerekmektedir.İmmünsupresif hastalarda da kişinin bağışıklık sistemi baskılandığı için her daim enfeksiyonlara açıklardır. Bu yüzden immünsupresif hastalar ağız ve diş sağlığına çok dikkat etmelidirler. Diyabeti olan hastalarda dişeti hastalıklarını daha sık görmekteyiz. Diyabeti olan hastalarımız mutlaka rutin diş muayenelerinde dişetleri konusunda doktorundan ekstra bilgi talep etmelidir. Gebelik durumu olan hastalarımızda hormon düzeylerinin değişmesi, mide bulantılarının olması sonucunda gebelik durumu boyunca çürük ve dişeti hastalıkları görülme oranı yüksektir.Mevcut dişeti hastalığının bulunması erken doğuma neden olmaktadırç Gebeliğin ilk 3 ayı ve son 3 ayı boyunca dental işlemlerin yapılması sakıncalıdır.Planlı şekilde gebelik düşünen hastalarımıza muhakkak gebelik öncesi dental muayene önermekteyiz.Ağız ve diş sağlığımızı korumak için mutlaka günde en az 2 kere dişlerimizi fırçalamalı, 6 ayda bir rutin şekilde diş hekimi muayenesi yaptırmalı, ağız içinde bulunan diş eksiklerimizi doldurmalıyız.</p>
      <hr class="cizgi" />

    </div>
      <header class="bar">
        <h3>İletişim</h3>

        <h4>Abdül Samed Doğan --- Harun Yakut</h4>
      </header>

    </body>
  </html>
