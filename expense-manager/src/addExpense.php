<?php
// this section runs when the expense is being added for the first time
session_start();
include_once("config.php");
// $category = $_POST['category'];
// $expense = $_POST['expense'] * 1;

if ($_POST['flag'] == 0) {
    array_push($_SESSION['expenses'], array($category => $expense));
    $_SESSION['totalexpense'] = $_SESSION['totalexpense'] + ($_POST['expense'] * 1);
    $_SESSION['remaining'] = $_SESSION['income'] - $_SESSION['totalexpense'];
} else {
    //  when the expense editted
    $update = $_SESSION['Update'];
    foreach ($_SESSION['expenses'] as $key => $value) {
        foreach ($value as $expensekey => $expensevalue) {
            if ($key == $update) {
                $_SESSION['totalexpense'] -= $expensevalue;
                $_SESSION['remaining'] += $expensevalue;
                $key = $_POST['category'];
                $value = $_POST['expense'];
                $_SESSION['expenses'][$key] = array($expensekey => $expensevalue);
                $_SESSION['totalexpense'] += $expensevalue;
                $_SESSION['remaining'] -= $expensevalue;
            }
        }
    }
    unset($_SESSION['Update']);
}

$array = array(
    'totalexpense' => $_SESSION['totalexpense'],
    'remaining' => $_SESSION['remaining'],
    'income' => $_SESSION['income']
);
print_r(json_encode($array));
?>