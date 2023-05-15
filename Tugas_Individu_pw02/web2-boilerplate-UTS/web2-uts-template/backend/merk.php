<?php
require_once '../database/dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM merk";
   $rs = $dbh->query($sql);
   
?>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th><th>Nama Merek</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $nomor  =1 ;
        foreach($rs as $row){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$row['nama_merk']?></td>
                       
        </tr>
        <?php 
        $nomor++;   
        } 
        ?>
    </tbody>
</table> 
        