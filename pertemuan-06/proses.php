<?php
  session_start();
  $arrbiodata = [
    "Nama" => $_POST["txtNama"],
    "Email" => $_POST["txtEmail"],
    "Pesan" => $_POST["txtPesan"]
  ];

  $_SESSION["biodata"] = $arrbiodata;
  header("location: index.php#tamu");
?>