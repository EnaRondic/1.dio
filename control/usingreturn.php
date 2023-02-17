<?php

function checkUserRoles($userRoles){
	if(empty($userRoles)){
		echo "roles can not be epty" . PHP_EOL;
		return;
	}

}
checkUserRoles("Admin");
switc($userRoles){
	case "Admin":
	 echo "Hello Admin!" . PHP_EOL;
	 break;
	 case "Editor":
	 echo "Hello Editor!" . PHP_EOL;
	 break;
	 default:
	}


checkUserRoles("Admin");
checkUserRoles("");
checkUserRoles("Editor");
