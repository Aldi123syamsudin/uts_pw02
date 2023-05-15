<?php 
require_once '../database/dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
   
?>

<table class="table table-striped">
    <tbody>
        <tr><td>No</td><td>: <?=$row['id']?></td></tr>
        <tr>   <td>Nama barang </td><td>: <?=$row['nama']?></td></tr>
        <tr>   <td>Merk </td><td>: <?=$row['merk_id']?></td></tr>
        <tr>   <td>Stok </td><td>: <?=$row['stok']?></td></tr>
        <tr>   <td>Harga </td><td>: <?=$row['harga']?></td></tr>
        <tr>   <td>Berat</td><td>: <?=$row['berat']?></td></tr>
        <tr>   <td>Jenis Produk</td><td>: <?=$row['jenis_produk_id']?></td></tr>
    </tbody>
</table>
