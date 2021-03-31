<?php


function IsRoleController($role=0){
	global $user_custom;
	if(!empty($user_custom)){
		if(intval($user_custom['role'])==$role){
			return True;
		}
	}
	return False;
}