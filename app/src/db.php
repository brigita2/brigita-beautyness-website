<?php
function dbJungtis()
{
    try {
        $pdo = new PDO('mysql:host=127.0.0.1; port=8889; dbname=form_baigiamasis', 'root', 'root');
        $teiginys = $pdo->prepare("INSERT INTO costumers(name, email, phone, service, message) 
            VALUES('$_POST[name]', '$_POST[email]', '$_POST[phone]', '$_POST[service]', '$_POST[message]')");
        return $teiginys->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

dbJungtis();
