<?php
require_once '../database/dbkoneksi.php';
?>
<?php
$sql = "DELETE * FROM produk";
$rs = $dbh->query($sql);

?>
