<?php
require_once '../database/dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM jenis_produk";
   $rs = $dbh->query($sql);
   
?>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th><th>Jenis Produk</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $nomor  =1 ;
        foreach($rs as $row){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$row['jenis_produk']?></td>
                       
        </tr>
        <?php 
        $nomor++;   
        } 
        ?>
    </tbody>
</table> 