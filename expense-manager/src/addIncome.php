<?php
//  adds income to the existing income
session_start();
include_once("config.php");
if (!isset($_SESSION['income'])) {
    $_SESSION['income'] = $_POST['income'];
}else{
    $_SESSION['income'] += ($_POST['income'] * 1);
    $_SESSION['remaining'] += ($_POST['income'] * 1);
}
$array = array(
    'totalexpense'=>$_SESSION['totalexpense'],
    'remaining' => $_SESSION['remaining'],
    'income' => $_SESSION['income']
);
print_r(json_encode($array));
?>