<?php
session_start();
 if($_POST['password']==2020){
    setcookie('id',$_POST['login']);
     $_SESSION['id'] = $_POST['login'];
     header ("Location: http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-rooting.php?page=1");
     exit();
 }
 else{
     echo "<p> Mauvais couple identifiant/mot de passe</p>";
     echo "<p> Cliquez <a href='http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-rooting.php?page=connexion'>ici</a> pour retourner sur la page connexion";
 }
?>
