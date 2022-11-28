<?php 

require_once('connect.php');

if (isset($_POST['add_data'])) {

	$cat_name = $_POST['catagory_name'];

	$str = strtolower($cat_name);
	
	//img upload

 $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $str);

	// $str = str_replace(' ', '-', $cat_name);

//
	$filename = $_FILES["pro_img"]["name"];

    $tempname = $_FILES["pro_img"]["tmp_name"];  

     $folder = "category/".$filename;
     move_uploaded_file($tempname, $folder);

 mysqli_query($links,"INSERT INTO catagory(catagory_name,slug,catagory_img)
 VALUES ('$cat_name','$slug','$filename')");

 echo '<script>alert("Added Category")</script>';
header('location:category_list.php');

}


 ?>