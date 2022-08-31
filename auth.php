<?php 
    if($_COOKIE['user'] == 'yes') //функция выхода
        setcookie('user', 'yes', time() - 3600, '/');
    else 
        setcookie('user', 'yes', time() + 3600, '/'); // '/' -> будет установлено на всех стр
    header('Location: /');
?> 