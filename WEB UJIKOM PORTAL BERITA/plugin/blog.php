<?php 
 	@$page = $_GET['aksi'];
 	switch ($page) {
 		case 'tambah':
 			include "tambah.php";
 			break;
 		case 'proses_tambah':
 		    include "proses_tambah.php";
 		    break;
 		case 'edit':
 			include "edit.php";
 			break;
 		case 'edit':
 		    include "proses_edit.php";
 		    break;
 		case 'isi_post':
 			include "isi_post.php";
 			break;
 		default:
 			include "list_post.php";
 			break;
 	}
 	 ?>