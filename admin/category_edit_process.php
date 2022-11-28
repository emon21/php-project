
<?php

require_once('connect.php');


	if(isset($_REQUEST['update_data'])){

	 $edid_ID = $_REQUEST['category_edit'];
	
	$catagory_name = $_POST['catagory_name'];

	$str = strtolower($catagory_name);
	
	//img upload

 $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $str);

	$insert_user = "UPDATE catagory SET catagory_name='$catagory_name' ,slug = '$slug' WHERE slug='$edid_ID'";

	$run_user = mysqli_query($links,$insert_user);

	if($_FILES["pro_img"]["name"]){

			$sel = "SELECT * FROM catagory WHERE slug='$edid_ID'";
			$res = mysqli_query($links,$sel);
			$rows = mysqli_fetch_assoc($res);
			$image = $rows['catagory_img'];
			@unlink("category/".$image);

			//image Update into db

            $filename = $_FILES["pro_img"]["name"];

            $tempname = $_FILES["pro_img"]["tmp_name"]; 
            
            $newfilename =  uniqid().'.jpg';
           

			//$icon_image = $_FILES['icon_image']['name'];
			//$icon_image_tmp = $_FILES['icon_image']['tmp_name'];

			move_uploaded_file($tempname,"category/$newfilename");
			//$pic = "img/".$_POST['edid_ID'].$_FILES['icon_image']['name'];
			//move_uploaded_file($_FILES['icon_image']['tmp_name'],$pic);

			$sql = "UPDATE catagory SET catagory_img='$newfilename' WHERE slug='$edid_ID'";
			mysqli_query($links,$sql);
		}

echo "<script>
        window.alert('Succesfully Updated');
        window.location.href='category_list.php';
        </script>";

}




?>