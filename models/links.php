<?php
class linksModels{
	public function linkModel($links){
		if($links == 'login'||
			$links == 'account_asset'){
			$module = 'views/modules/'.$links.'.php';
		}else if($links == 'index'){
			$module = 'views/modules/login.php';
		}else{
			$module = 'views/modules/login.php';
		}
		return $module;
	}
}
 ?>