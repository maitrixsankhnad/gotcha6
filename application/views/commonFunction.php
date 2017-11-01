<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseURL = base_url();
$defaultSetting = getDefault();

if (strpos(current_url(),'complete_registration') !== false) {
	$isRegistration = true;
	if($user_type == 2){
		$profileLebel = 'SME Registration';
	}else{
		$profileLebel = 'Resource Manager Registration';
	}
} else {
	$isRegistration = false;
	$profileLebel = 'Manage Profile';
}

?>

<script>
base_url = '<?=$baseURL;?>';
</script>