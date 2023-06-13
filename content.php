<?php
if(empty($_GET['module']) || $_GET['module'] == 'Home'){
	include('Home/dashboard.php');
} else if($_GET['module']=='action'){
	include('Home/action.php');
} else if($_GET['module']=='user'){
	include('Home/user/view/view.php');
} else if($_GET['module']=='data-absensi'){
	include('Home/data-absensi/view/view.php');
} else if($_GET['module']=='cek-absensi'){
	include('Home/data-absensi/cek-absensi.php');
}
?>