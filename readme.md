**formValidate** - класс для валидации данных пришедших с формы

Для работы необходимо создать экземпляр класса **formValidate**

Пример: **$valid = new formValidate();**

***Важно!** Класс использует сесии.

1. Для проверки пришедших данных на пустоту используется метод **data_empty**, в который мы передаем все пришедшие данный.

Пример: **$valid->data_empty($data);**

*Примечание. Данные передаем одной переменной - **$data = $_POST;**

2. Для проверки валидности email - используем метод **mail_valid**, в который передаем поверяемое поле и название поля.

Пример: **$valid->mail_valid($_POST['mail'], 'Login');**

3. Для проверки поля на тип (int) - используем метод **field_int_valid**, в который передаем поверяемое поле и название поля.

Пример: **$valid->field_int_valid($_POST['phone'], 'Телефон');**

4. Для проверки поля на количество символов - используем метод **field_len_valid**, в который передаем поверяемое поле и название поля.

Пример: **$valid->field_int_valid($_POST['phone'], 'Телефон');**

Если в результате возвращается ошибка, то она записывается в **$_SESSION['alert'];**, в ином случае скрипт работает дальше.

Вывод результата на экран: 

    if(!empty($_SESSION['alert'])){
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
    }
