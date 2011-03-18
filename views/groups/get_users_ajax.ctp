<!-- // FILE: get_group_ajax.ctp; PURPOSE: to return all the $users -->
<?php 
	if(isset($users_list)) { 
		echo $this->Js->object($users_list);
	}
?>
