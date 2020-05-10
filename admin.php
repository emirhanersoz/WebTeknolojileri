<link rel="stylesheet" a href =".//CSS/adminstyle.css">
<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo "Hoşgeldiniz<br>";
header("Refresh: 3; url=/HTML/hakkinda.html");
}
?>