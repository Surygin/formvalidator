<?php

session_start();

require ('formValidate.php');

$validate = new formValidate();

$data = $_POST;

$validate->data_empty($data);
$validate->mail_valid($_POST['login']);
if(!$validate->field_len_valid($_POST['phone'], 'Телефон')){
    $validate->field_int_valid($_POST['phone'], 'Телефон');
}
header("Location:index.php");

