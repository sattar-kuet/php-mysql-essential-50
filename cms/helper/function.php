<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

function set_flush_message($msg,$alert){

	$_SESSION['flash_message'] = $msg;
	$_SESSION['alert'] = $alert;
}

function show_flush_message(){

	extract($_SESSION);

    unset($_SESSION['flash_message']);
    unset($_SESSION['alert']);
    $message = '';
    if(isset($flash_message)){ 

        $message = '<div class="alert '. $alert.'">'. $flash_message.'</div>';
    }
    echo $message;         
}

?>