<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>App KPR | <?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  

</head>

<?php 


$cek = $this->db->query("SELECT b.id_booking as id_booking, b.id_kavling as id_kavling  FROM tb_booking b LEFT JOIN tb_berkas bk ON bk.id_booking = b.id_booking WHERE bk.id_booking IS NULL and  DATE_ADD(tgl_booking, INTERVAL 14 DAY)  <= CURDATE()")->result();

foreach($cek as $row){
   $this->db->query("delete from tb_booking where id_booking='$row->id_booking'");

   $this->db->query("update tb_kavling set status='available' where id_kavling='$row->id_kavling'");
   

}

?>

