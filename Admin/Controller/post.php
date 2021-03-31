<?php
if(!IsRoleController() && !IsRoleController(1)){
	header('Location: /admin/index.php');
}


if($_POST){
	if(!empty($_POST['action']) && $_POST['action']=='create' ){

		$alert=[
			'type'=>'error',
			'message'=>'',
			'src'=>''
		];

		if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_FILES['image'])){
			
			$title=$_POST['title'];
			$content=$_POST['content'];
			$image_url=$_FILES['image'];
			$path=dirname(__FILE__).'/../../images/posts/'.$image_url['name'];

			move_uploaded_file($image_url['tmp_name'],$path);

			$image_url='/images/posts/'.$image_url['name'];
			$user_id=$user_custom['id'];
			if(!empty($_POST['post_id'])){
				$post_id=$_POST['post_id'];
				$sql="UPDATE posts SET title='$title',content='$content',image='$image_url',user_id=$user_id WHERE post_id=$post_id";
				if(mysqli_query($conn,$sql)){
					$alert['type']='success';
					$alert['message']='Post Güncellendi.';
				}else{
					$alert['message']='Post Güncellenemedi.';
				}
			}else{
				$date=date('Y-m-d H:i:s');
				$sql="INSERT INTO posts (title,content,image,user_id,preview,datetime) VALUES ('$title','$content','$image_url',$user_id,0,'$date')";
				
				if(mysqli_query($conn,$sql)){
					$alert['type']='success';
					$alert['message']='Post Eklendi.';
				}else{
					$alert['message']='Post Eklenemedi.';
				}
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
		if(!empty($_POST['post_id'])){
			$id=$_POST['post_id'];
		
			$sql="DELETE FROM posts WHERE post_id=$id";
			if(mysqli_query($conn,$sql)){
				$alert['type']='success';
				$alert['message']='Post Silindi.';
					
			}else{
				$alert['message']='Post Silinemedi.';
			}
		}else{
			$alert['message']='Bilgileriniz Eksik.';
		}

	}
}
