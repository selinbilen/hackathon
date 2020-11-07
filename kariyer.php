<?php
    include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="CSSS.css" media="all" rel="Stylesheet" type="text/css" />
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
<header>
    <STYLE>A {text-decoration: none;} </STYLE>
    <a class="header-item">
        Contact Us: ayaz@gmail.com
    </a>

      <div class = "navbar">
        <img id="logo" src = "logo.png"  alt="Logo">
          <div class = "navigate">
           <a class="nav-item" href="proje_ekle.php">Projeni Ekle</a>
              
          <div class = "navigate">
              <div class="dropdown nav-item" >
              <a class="dropbtn">Hedef Belirle</a>
                <div class="dropdown-content">
                  <a href="hedef.php">Hedef Gir</a><br>
                  <a href="kariyer.php">Kariyer Değiştir </a><br>
              </div>
            </div>
              <a class="nav-item" href="sıralama.php">Sıralamalar</a>
            <div class="dropdown nav-item" >
              <a class="dropbtn">Terfi Alanlar</a>
                <div class="dropdown-content">
                  <a href="terfi_1.php">Son 1 Ay </a><br>
                  <a href="terfi_2.php">Son 6 Ay </a><br>
                  <a href="terfi_3.php">Son 1 yıl </a><br>
              </div>
            </div>
          </div>
        </div>
        <div class = "navigate">
             <a class="nav-item" href="hedeflerim.php">HEDEFLERİM</a>
            <a class="nav-item" href="index.php">PROJELERİM</a>
          <a class="buttonstyle" href="signup.php" >Çıkış</a>
        </div> 
    </div>
  </header>
    <main style= "padding:90px 0px">
<form id= "main-wrapper" >

    <h2>Kariyer Testi</h2>
    <h4>Cinsiyetiniz: <select size="3" style="float: right" class="user-input2" >  <!-- Note: I've removed the 'multiple' attribute -->
        <option>Kadın </option>
        <option>Erkek</option>
        <option>Diğer</option>
        </select>
    </h4> 
    <h4>Üniversite Bölümünüz: <select size="3" style="float: right" class="user-input2" >  <!-- Note: I've removed the 'multiple' attribute -->
        <option>Bilim ve Teknoloji </option>
        <option>İşletme</option>
        </select>
    </h4> 
     <h4>İş Deneyiminiz Var mı:<select size="3" style="float: right" class="user-input2" >  <!-- Note: I've removed the 'multiple' attribute -->
        <option>Evet </option>
        <option>Hayır</option>
        </select>
    </h4>  
    <h4>Uzmanlık Alanınız:<select size="3" style="float: right" class="user-input2" >  <!-- Note: I've removed the 'multiple' attribute -->
        <option>Pazarlama ve İnsan Kaynakları</option>
        <option>Pazarlama ve Finans</option>
        </select>
    </h4> 
    <h4>ALES Bölümünüz:
    <select size="3" style="float: right" class="user-input2" >  <!-- Note: I've removed the 'multiple' attribute -->
        <option>Ticaret </option>
        <option>Temel Bilimler</option>
        <option>Sanat</option>
        </select>
    </h4> 
    <h4>KPSS Puanınız: <input style="float: right "class="user-input" type="int" name="user-name" placeholder="Grade 0-100">
    </h4> 
    <h4>ALES Puanınız: <input style="float: right "class="user-input" type="int" name="user-name" placeholder="Grade 0-100">
    </h4> 
    
    
    
    <h4>Üniversite Mezuniyet Puanınız:<input style="float: right "class="user-input" type="int" name="user-name" placeholder="Grade 0-100">
    </h4> 
    
   
    

    <h4>MBA Puanınız: 
    <input class="user-input" type="int" style="float: right " name="user-name" placeholder="Grade 0-100">
    </h4> 
    
        </form>
    </main>
    <aa href="index.php" class="previous">&laquo; Previous</aa>
    <aa href="#" class="next" style="float: right ">Next &raquo;</aa>

</body>
<footer class="seperator">
&copy; 2020 &nbsp; <span class="seperator" > |
        </span> 
        Design by K Contact:<a href > www.k.com</a>
	</footer>
</html>