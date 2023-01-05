<html lang="tr">
<head>
    <title></title>
    <meta charset="utf-8">

    <link  rel="stylesheet" href="css/Menu.css">
    <link rel="stylesheet" href="css/tespit.css">
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
      <div class="tespit_resim_div">
<img class="tespit_resim " src="resimler/tespit.jpg" alt="">

    </div>

<div class="tespit">

      <form class="tespit" action="" method="POST">


    	  <select name="dropDown">
        <option value="0">Lütfen Rahatsızlığınızı Seçiniz!</option>
    		<option value="1">Diş fırçalarken diş eti kanaması</option>
    		<option value="2">Diş fırçalarken uzun süredir diş eti kanaması</option>
    		<option value="3">Diş eti çekilmesi</option>
    		<option value="4">Dişte yiyecek</option>
    		<option value="5">Diş renginden memnun değilseniz</option>
    		<option value="6">Yeni diş çıkarken morarma</option>
        <option value="7">Yeni diş çıkarken aşırı rahatsız olunması</option>
    		<option value="8">Dişte ağrı yapmayan çürük var</option>
    		<option value="9">Dişteki çürük ileri derecede</option>
    		<option value="10">Dişte iltihap var</option>
    		<option value="11">Diş çürük ve dolgulu </option>
        <option value="12">Diş çürük ve dolgulu değil</option>
        <option value="13">Diş dolgulu veya kaplama</option>
        <option value="14">Diş dolgulu değil veya kaplama değil</option>
        <option value="15">Uykudan uyandıran bir ağrı var</option>
        <option value="16">Sadece diş ağrısı var</option>
        <option value="17">Diş üzerindeki çürük nedeniyle oyuk oluştu</option>
        <option value="18">Diş ağrısı ve sinüzit var</option>
        <option value="19">Diş ağrısı ve sinir ağrıları var</option>
        <option value="20">Diş iltihaplanmış ve ısınma anında ağrı artıyor</option>
        <option value="21">Soğuk ile diş ağrısı artıyor</option>
        <option value="22">sıcak ile diş ağrısı artıyor</option>
       </select>
       <br>
       <input class="button" type="submit" name="gonder" value="GÖNDER"/>

    <?php
    if($_POST['gonder']){
    	$secilen = $_POST['dropDown'];
      echo "<br> <br>";
      echo '<p class="cozum">';
      switch ($secilen) {
        case '0':
          echo "Lütfen Rahatsızlığınızı Seçiniz!";
          break;
        case '1':
          echo "Dişeti hastalığı var diş hekimine başvur.";
          break;
        case '2':
          echo "Dişeti çekilmesi var.Diş hekimine başvur.";
          break;
        case '3':
          echo "Dolgu yaptır.";
          break;
        case '4':
          echo "Dişlerini temizle.";
          break;
        case '5':
          echo "Lazerle beyazlattır.";
          break;
        case '6':
          echo "Acilen diş hekimine başvur.";
          break;
        case '7':
          echo "Rahatsız eden bölgeyi parmakla bastırmadan masaj yapar gibi ovalayın ve diş hekimine başvurun.";
          break;
        case '8':
          echo "Dolgu yaptır.";
          break;
        case '9':
          echo "Kanal tedavisi ve dolgu yaptır.";
          break;
        case '10':
          echo "Antibiyotik kullan ve diş hekimine başvur.";
          break;
        case '11':
          echo "Tuzlu su ile gargara yap ve diş hekimine başvur.";
          break;
        case '12':
          echo "Ağrıyı dindirmek için diş fırçala ve diş hekimine başvur.";
          break;
        case '13':
          echo "Soğuk suyla gargara yap ve diş hekimine başvur.";
          break;
        case '14':
          echo "Ağrı kesici al ve diş hekimine başvur.";
          break;
        case '15':
          echo "Mideye kanın inebileceği pozisyonda yat ve diş hekimine başvur.";
          break;
        case '16':
          echo "<b> 3 seçenekten birini uygulayın:</b> <br> ";
          echo "Defne yaprağı sirke ile kaynatılarak gargara olarak kullanın ve diş hekimine başvurun.<br>";
          echo "Bir bardak suya bir kaç damla karanfil esansı konularak bu su ile ağız çalkala ve diş hekimine başvur.<br>";
          echo "Diş fırçası ve diş ipi yardımıyla dişleri yavaşça temizle ve diş hekime başvur";
          break;
        case '17':
          echo "O bölgeye çok az miktarda karanfil yağı emdirilmiş pamuk koy ve diş hekimine başvur.";
          break;
        case '18':
          echo "Diş hekimine başvur.";
          break;
        case '19':
          echo "Diş hekimine başvur.";
          break;
        case '20':
          echo "Antibiyotik al ve diş hekimine başvur.";
          break;
        case '21':
          echo "Çürük ilerlemiştir.Diş hekimine başvur";
          break;
        case '22':
          echo "Pulpa iltihabı ilerlemiştir. Kanal tedavisi yaptır.";
          break;


        default:

          break;
      }
echo "</p>";
      } ?>

    </div>
  </div>
      <header class="bar">
        <h3>İletişim</h3>

        <h4>Abdül Samed Doğan --- Harun Yakut</h4>
      </header>

    </body>
  </html>
