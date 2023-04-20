<?php
// this section sends the category and amount 
session_start();
include_once("config.php");

$_SESSION['Update'] = $_POST['id'];
foreach ($_SESSION['expenses'] as $expensekey => $expensevalue) {
   foreach ($expensevalue as $key => $value) {
    if ($expensekey == $_POST['id']){
        $array = array('key'=> $key, 'value' => $value);
        print_r(json_encode($array)) ;
        break;
    }
   }
}
?>