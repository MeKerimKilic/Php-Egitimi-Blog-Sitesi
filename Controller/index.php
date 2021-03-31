<?php

if($_POST){
	$alert=[
		'type'=>'error',
		'message'=>''
	];
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
		$status=MailSend($_POST['name'],'kerim.kilic.1751@gmail.com','Php Eğitimi -'.$_POST['email'],$_POST['message']);
		if($status){
			$alert['type']='success';
			$alert['message']='Mail Başarılı Bir Şekilde İletildi';
		}else{
			$alert['message']='Mail İletilemedi Sunucu Hatası';
		}
		
	}else{
		$alert['message']='Bilgileriniz Eksik';
	}
}


?>