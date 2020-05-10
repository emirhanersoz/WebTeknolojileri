<!DOCTYPE html>
<html>
<header>
</header>
<body>
<?php
   	     $_adi=$_POST['adi'];
         $_soyad=$_POST['soyad'];
         $_email=$_POST['email'];
         $_message=$_POST['message'];
         echo "<h3>İLETİŞİM FORMU ÖN İZLEMESİ</h3>";
   	     echo "<span>İsim:</span> $_adi <br>";
         echo "<span>Soyad:</span> $_soyad<br>";
         echo "<span>Email:</span> $_email <br>";
         echo "<span>Mesaj:</span> $_message";
?>
</body>
</html>


<style>

    body{
        font-size: 250%;
        margin-top: 10%;
        margin-left: 20%;
        word-break: break-all;
    }
    
    span{
        color:crimson;
    }


</style>