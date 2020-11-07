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
          <a class="buttonstyle" href="login.php" >Çıkış</a>
        </div> 
    </div>
    
  </header>
    
    <main style= "padding:90px 0px">
<form id= "main-wrapper" >
    <h2>Aylık Başarı Tablosu</h2>
            <table>
            <tr>
                <td>İsim</td>
        		<td>Departman</td>
        		
                <td>Çalışılan Yıl</td>
                <td>Maaşı</td>
                <td>Yapılan Proje Sayısı</td>
                <td>Başarı Yüzdesi</td>
    		</tr>
            
    <?php
        $sql = "SELECT * FROM employee ORDER BY basariyuzde DESC";
            
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
            while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
           <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['departman']; ?></td>
            <td><?php echo $row['worked_year']; ?></td>  
            <td><?php echo $row['salary']; ?></td>
            <td><?php echo $row['projects_num']; ?></td>
            <td><?php echo $row['basariyuzde']; ?></td>
        </tr>
     <?php
            }
        }
    ?>
    </table>
    <h3>Terfi Ettir
    &nbsp;&nbsp;
        <input class="user-input" type="varchar" name="name" placeholder="İsim">
           &nbsp; 
        <input class="user-input" type="varchar" name="departman" placeholder="Departman"> &nbsp; 
        <input class="user-input" type="varchar" name="salary" placeholder="Yeni Maaşı"> &nbsp;
        <a href="terfi_fake.php" name="update" class="next">Uygula</a>
        <a href="#" class="next">Terfi edenler</a>
    </h3>
        </form>
        
        
    </main>
</body>
<footer class="seperator">
&copy; 2020 &nbsp; <span class="seperator" > |
        </span> 
        Design by K Contact:<a href > www.k.com</a>
	</footer>
</html>

<?php
if (isset($_POST['update'])){
    $name = $_POST['name'];
    $departman = $_POST['departman'];
    $salary = $_POST['salary'];
    $sql = "UPDATE employee SET salary = '$salary' WHERE name = '$name' AND departman = '$departman'" ;

    mysqli_query($conn, $sql);
    header("Location: upt.php?insert=success");
    exit();
}


?>