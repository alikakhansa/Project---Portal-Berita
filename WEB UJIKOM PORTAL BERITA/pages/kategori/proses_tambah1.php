<?php

include "../../inc/koneksi.php";

$slug = '';

if(isset($_POST["create"])){

 $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["nama_kategori"])));

 $query = "SELECT slug FROM kategori WHERE kategori LIKE '$slug%'";

 $statement = $koneksi->prepare($query);

 if($statement->execute()){

  $total_row = $statement->rowCount();

  if($total_row > 0){

   $result = $statement->fetchAll();

   foreach($result as $row){

    $data[] = $row['slug'];

   }

   if(in_array($slug, $data)){

    $count = 0;

    while( in_array( ($slug . '-' . ++$count ), $data) );

    $slug = $slug . '-' . $count;

   }

  }

 }

 $insert_data = array(

  ':nama_kategori'  => $_POST['nama_kategori'],

  ':slug'   => $slug

 );

 $query = mysqli_query($koneksi, "INSERT INTO `kategori` VALUES ('$NAMA_KATEGORI', '$SLUG');")
	or die(mysqli_error($koneksi));

 $statement = $connect->prepare($query);

 $statement->execute($insert_data);

}

header('location:../../admin/index.php?page=kategori');

?>