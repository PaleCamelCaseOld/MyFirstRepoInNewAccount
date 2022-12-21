<?php
    if (isset($_POST)) {
        print("Имя: " . $_POST['name']);
        print("<br>Email: " . $_POST['email']);
        print("<br>Дата: " . $_POST['date']);
        print("<br>Сообщение: " . $_POST['message']);
        
    }
?>