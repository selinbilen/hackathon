 <?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Insert Data </title>
<link href="file_2.css" media="all" rel="Stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap-337.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>  
    <div class="row justify-content-center">
        <br><br><br><br>
    <form  method ="POST">
        <h1>Proje Ekle</h1>
        <input class="user-input" type="varchar" name="Projeninismi"placeholder="Projenin İsmi">
        <input class="user-input" placeholder = "Departman" type="int" name="Departman">
        <input class="user-input" type="int" placeholder = "Bitirme Süresi" name="Projesuresi">
        <text> <b>Proje Detayı </b></text>
        <textarea class="icerik" type="text"  name="ProjeDetayi" ></textarea>
        <div class="form-group">
        <button type="submit" name="save">Kaydet</button>
        </div>
    </form>
        <form method="get" action="index.php">
            <button type="submit">Geri</button>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['save'])){
    $Projeninismi = $_POST['Projeninismi'];
	$Departman = $_POST['Departman'];
    $Projesuresi = $_POST['Projesuresi'];
    $ProjeDetayi = $_POST['ProjeDetayi'];


    $conn -> query ("INSERT INTO `Proje`(`Projeninismi`, `Departman`, `Projesuresi`, `ProjeDetayi`) VALUES ('$Projeninismi','$Departman','$Projesuresi','$ProjeDetayi')") or die(mysqli_error($conn));
    mysqli_query($conn, $sql);
    header("Location: index.php?insert=success");
    exit();
}
?>


