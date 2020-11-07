<?php
    include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="CSS.css" media="all" rel="Stylesheet" type="text/css" />
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
          <a class="buttonstyle" href="login.php" >Çıkış</a>
        </div> 
    </div>
  </header>
    <main style= "padding:90px 0px">
<form id= "main-wrapper" >


    <h2>Projelerim</h2>

            <table>
            <tr>
                <td>Projenin İsmi</td>
        		<td>Departman</td>
        		<td>Proje Süresi</td>
                <td>Proje Detayı</td>
    		</tr>
            
    <?php
        $sql = "SELECT * FROM Proje";
            
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
            while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
           <td><?php echo $row['Projeninismi']; ?></td>
            <td><?php echo $row['Departman']; ?></td>
            <td><?php echo $row['Projesuresi']; ?></td>
            <td><?php echo $row['ProjeDetayi']; ?></td>

        </tr>
     <?php
            }
        }
    ?>
    </table>
    
        </form>
    </main>
</body>
<footer class="seperator">
&copy; 2020 &nbsp; <span class="seperator" > |
        </span> 
        Design by K Contact:<a href > www.k.com</a>
	</footer>
</html>