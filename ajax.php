<?php
if($_POST){
	require('core/core.php');
	switch (isset($_GET['mode'])? $_GET['mode']: null) {
		case 'login':
			require('core/bin/ajax/goLogin.php');
		break;
		case 'search':
			require('core/bin/ajax/goSearch.php');
		break;
		case 'modify':
			require('core/bin/ajax/goModify.php');
		break;
		case 'delete':
			require('core/bin/ajax/goDelete.php');
		break;
		case 'reporte':
			require('core/bin/ajax/goReportes.php');
		break;
		default:
			header('location:index.php');
		break;
	}
}else{
	header('location:index.php');
}
?>
