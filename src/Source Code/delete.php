<?php
include 'connect.php';
if (isset($_GET ['Nama'])){
    $query= mysqli_query($conn,"SELECT *FROM user WHERE Nama='".$_GET['Nama']."'");
    $hasil=mysqli_fetch_array($query);
    unlink("inputimg/".$hasil['Foto']);
    $delete=mysqli_query($conn,"DELETE FROM user WHERE Nama='".$_GET['Nama']."'");
    header('location:dataresult.php');
}
?>