<link rel="stylesheet" href= "/CSS/adminstyle.css">
<?php
include("ayar.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:admin.php");
}else{
echo "Kullancı Adı veya Şifre Yanlış.<br>";
echo "Giriş Sayfasına Yönlendiriliyorsunuz.";
header("Refresh: 3; url=index.php");
}
ob_end_flush();
?>