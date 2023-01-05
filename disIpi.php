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
      <h3 >Diş İpi Nasıl Kullanılır?</h3>
      <br>
      <div class="bilgi">
        <h4 class="bilgi">Diş İpi Nasıl Kullanılmalıdır?</h4>
        <br>
        <p class="bilgi">Doğru kullanıldığı takdirde, diş fırçasının ulaşamayacağı yerlerdeki; yani dişeti çizgisinin altındaki ve dişler arasındaki yerlerdeki plak yiyecek artıkları diş ipiyle çıkarılabilir.
          Plak birikimi, diş çürüğüne ve dişeti hastalığına, yol açabileceğinden, dişlerin diş ipiyle düzenli olarak temizlenmesi tavsiye edilir.</p>
          <br>
        <p class="bilgi">Diş ipinden maksimum fayda sağlamak için, aşağıdaki yöntemleri uygulayabilirsiniz:</p>
          <br>
          <ul class="liste">
            <li>Yaklaşık kırk santimetrelik diş ipi alarak, ipliğin büyük bir bölümünü orta parmaklarınızın çevresine sarın ve kullanmak için dört veya beş santimetrelik ipi açıkta bırakın.</li>
            <li>Diş ipini, baş parmak ve işaret parmakları arasında gerili tutarak, dişleriniz arasında nazikçe yukarı ve aşağı doğru hareket ettirin.</li>
            <li>İpliği tüm diş yüzeylerinde nazikçe gezdirin ve ipin dişeti çizgisini geçtiğine emin olun. Diş ipini zorlamayın, aksi takdirde hassas dişeti dokusu kesilmesi veya doku eizlmesiyle karşılaşılabilir.</li>
            <li>Dişten dişe geçerken diş ipinin temiz bölümlerini kullanın.</li>
            <li>Diş ipini çıkarmak için, ipliği dişinizden yukarı ve dışarı taşımak için aynı ileri geri hareketini uygulayın.</li>
          </ul>
          <br>
          <h4 class="bilgi">Hangi Tip Diş İpini Kullanmalıyım?</h4>
          <br>
          <ul class="liste">
            <p>İki tip diş ipi bulunmaktadır:</p>
            <br>
            <li>Naylon (veya çok filamanlı) diş ipi</li>
            <li>PTFE (tek filamanlı) diş ipi</li>
            <br>
            <p>Naylon diş ipi, mumlu ve mumsuz olarak değişik aromalarla satılmaktadır Bu diş ipi tipi birden fazla naylon telden oluştuğu için, özellikle birleşme noktaları sıkı olan dişler arasında aşınabilir ya da yırtılabilir. Daha pahalı olmakla beraber, tek filamanlı (PTFE) iplik, sıkışık diş aralarında bile dişler arasında daha kolay kayar ve yırtılmaya karşı dirençlidir.
               Doğru kullanıldığı takdirde, her iki diş ipi de, plak ve kalıntıları çıkarmak için uygundur.</p>
          </ul>


        </div>
        <div class="ip">
          <img class="ip_resim" src="resimler/diş_ipi.jpg" alt="">

        </div>
    </div>
      <header class="bar">
        <h3>İletişim</h3>

        <h4>Abdül Samed Doğan --- Harun Yakut</h4>
      </header>

    </body>
  </html>
