<?php 

/* COMEÇAR SESSÃO */
session_start();

/* DESTRUIR SESSÃO */
session_destroy();
header("location:login.php");
exit;
?>
