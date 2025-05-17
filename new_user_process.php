<?php
    require_once 'db_config.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $login = $_POST['login'];
            $email = $_POST['email'];
            $tele = $_POST['tele'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];

            print_r($login);
            print_r($email);
            print_r($tele);
            print_r($password);
            print_r($password_confirm);

            if ($password == $password_confirm) {
                $sql = "INSERT INTO users (login, email, tele, password, token)
                VALUES(:login, :email, :tele, :password, 'querty')";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':login', $login);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':tele', $tele);
                $stmt->bindParam(':password', $password);
                $stmt->execute();
                echo("Поздравляем с регистрацией");
            }
            else{
                echo("Пароли не совпадают");
            }


        //    if(empty($title) || empty($description)){
        //         Header("Location: index.php");
        //         exit;

        //    }

        //    $sql = "INSERT INTO task (title, description)
        //    VALUES('$title', '$description')";
        //    $stmt = $conn->prepare($sql);
        //    $stmt->bindParam(':title', $title);
        //    $stmt->bindParam(':description', $description);
        //    $stmt->execute();
        //    Header("Location: index.php");
        //    exit;
        }

       


?>
    