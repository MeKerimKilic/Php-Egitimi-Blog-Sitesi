<?php
if(!IsRoleController()){
	header('Location: /admin/index.php');
}
if($_POST){
	if(!empty($_POST['action']) && $_POST['action']=='create' ){

		$alert=[
			'type'=>'error',
			'message'=>'',
			'src'=>''
		];

		if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['button_text']) && !empty($_POST['button_url']) && !empty($_FILES['image_url'])){
			$title=$_POST['title'];
			$description=$_POST['description'];
			$button_text=$_POST['button_text'];
			$button_url=$_POST['button_url'];
			$image_url=$_FILES['image_url'];
			$path=dirname(__FILE__).'/../../images/slider/'.$image_url['name'];

			move_uploaded_file($image_url['tmp_name'],$path);
			$image_url='/images/slider/'.$image_url['name'];
			$sql="INSERT INTO slider (title,description,button_text,button_url,image_url) VALUES ('$title','$description','$button_text','$button_url','$image_url')";
			if(mysqli_query($conn,$sql)){
				$alert['type']='success';
				$alert['message']='Slider Eklendi.';
			}else{
				$alert['message']='Slider Eklenemedi.';
			}
		}else{
			$alert['message']='Bilgileriniz Eksik.';
		}
	}
	if(!empty($_POST['action']) && $_POST['action']=='delete' ){

		$alert=[
			'type'=>'error',
			'message'=>'',
			'src'=>''
		];
		if(!empty($_POST['slider_id'])){
			$id=$_POST['slider_id'];
		
			$sql="DELETE FROM slider WHERE id=$id";
			if(mysqli_query($conn,$sql)){
				$alert['type']='success';
				$alert['message']='Slider Silindi.';
					
			}else{
				$alert['message']='Slider Silinemedi.';
			}
		}else{
			$alert['message']='Bilgileriniz Eksik.';
		}

	}
}


?>