<?php 
require_once '../database/dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];

   $_merk = $_POST['merk_id'];
   $_stok = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_jenis = $_POST['jenis'];
   
   $_proses = $_POST['proses'];

   
   $ar_data[]=$_nama; 
   $ar_data[]=$_merk;
   $ar_data[]=$_stok;
   $ar_data[]=$_harga;
   $ar_data[]= 1.2 * $_harga;
   $ar_data[]=$_jenis; 

   if($_proses == "Simpan"){
    
    $sql = "INSERT INTO produk (nama,merk_id,harga,stok,jenis) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];
    $sql = "UPDATE produk SET nama=?,merk_id=?,harga=?,stok=?
    ,jenis=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:../backend/index.php');
?>