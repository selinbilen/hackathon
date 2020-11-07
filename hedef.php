 <?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Insert Data </title>
<link href="file_2.css" media="all" rel="Stylesheet" type="text/css" />

</head>
<body>  
    <div class="row justify-content-center">
        <br><br><br><br>
    <form  method ="POST">
        <h1>Hedef Ekle</h1>
        <input class="user-input" type="varchar" name="hedefismi"placeholder="Hedef İsmi">
        <input class="user-input" placeholder = "Departman" type="int" name="Departman">
        <input class="user-input" type="int" placeholder = "Tahmini Bitirme Süresi" name="hedefsuresi">
        <text> <b>Hedef Detayı </b></text>
        <textarea class="icerik" type="text"  name="HedefDetayi" ></textarea>
        <div class="form-group">
        <button type="submit" name="save">Kaydet</button>
        </div>
    </form>
        <form method="get" action="hedeflerim.php">
            <button type="submit">Geri</button>
        </form>
    </div>
</body>
<footer class="seperator">
&copy; 2020 &nbsp; <span class="seperator" > |
        </span> 
        Design by K Contact:<a href > www.k.com</a>
	</footer>
</html>

<?php
if (isset($_POST['save'])){
    $hedefismi = $_POST['hedefismi'];
	$Departman = $_POST['Departman'];
    $hedefsuresi = $_POST['hedefsuresi'];
    $HedefDetayi = $_POST['HedefDetayi'];


    $conn -> query ("INSERT INTO `hedef`(`hedefismi`, `Departman`, `hedefsuresi`, `HedefDetayi`) VALUES ('$hedefismi','$Departman','$hedefsuresi','$HedefDetayi')") or die(mysqli_error($conn));
    mysqli_query($conn, $sql);
    header("Location: index.php?insert=success");
    exit();
}
?>


