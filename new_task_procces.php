<?php
    require_once 'db_config.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

             $title = $_POST['title'];
            $description = $_POST['description'];

           if(empty($title) || empty($description)){
                Header("Location: index.php");
                exit;

           }

           $sql = "INSERT INTO task (title, description)
           VALUES(:title, :description)";
           $stmt = $conn->prepare($sql);
           $stmt->bindParam(':title', $title);
           $stmt->bindParam(':description', $description);
           $stmt->execute();
           Header("Location: index.php");
           exit;
        }

       


?>
    