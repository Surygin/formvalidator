<?php

    class formValidate{

        function data_empty($data){
            $keys = array_keys($data);
            foreach ($keys as $key){
                if(empty($data[$key])){
                    $_SESSION['alert'] = "Поле <b>" . $key . "</b>  не заполнено! <br>";
                    header("Location:index.php");
                    exit;
                }
            }
        }

        function mail_valid($mail){
            if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                $_SESSION['alert'] = "Поле <b>Login</b> заполнено не корректно! <br>";
                header("Location:index.php");
                exit;
            }
        }

        function field_int_valid($field, $name_field){
            if(!filter_var($field, FILTER_VALIDATE_INT)){
                $_SESSION['alert'] = "Поле " . $name_field . " заполнено не корректно! <br>";
                header("Location:index.php");
                exit;
            }
        }

        function field_len_valid($field, $name_field){
            $len = strlen($_POST['phone']);
            if($len < 4){
                $_SESSION['alert'] = "Поле " . $name_field . " заполнено не корректно! Минимум 4 символа <br>";
                header("Location:index.php");
                exit;
            }
        }

}