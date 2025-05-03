<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <?php
    require_once "db_config.php";


    $sql = "SELECT * FROM task";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->FetchAll(PDO::FETCH_ASSOC);
    $task_down_count = 0;


    foreach ($data as $task) {
        if ($task['done'] == 1) {
            $task_down_count++;
        }
    }

    ?>



    <header>
        <div class="logo">
            <img src="img/logo.svg" alt="">
        </div>
    </header>
    <main>
        <form action="" id="newtask">
            <div class="forma">
                <input id="newrequest" type="text" placeholder="type a new task here">
                <input id="newrequest" type="text" placeholder="type a new task here">
            </div>

            <div class="submitbtn">
                <p>Add</p>
                <img src="img/add.svg" alt="">
            </div>
    </form>   
            



            <div id="statistics">
                <div class="task-counter">
                    <p>All tasks</p>
                    <p class="counter"><?= count($data) ?></p>
                </div>
                <div class="task-done">
                    <p>Done tasks</p>
                    <p class="counter"><?= $task_down_count ?></p>
                </div>

            </div>



            <?php if (count($data) > 0): ?>
                <div class="new-tasks"></div>
                <?php foreach ($data as $task): ?>

                    <div class="task">
                        <div class="tittle">
                            <?= $task['title'] ?>
                        </div>
                        <div class="description">

                            <div class="checkbox">
                                <input type="checkbox" name="" id="">
                            </div>

                            <div class="task-description">
                                <?= $task['description'] ?>
                            </div>


                            <div class="urna">
                                <img src="img/urna.svg" alt="">
                            </div>


                        </div>
                    </div>




                    </div>

                <?php endforeach; ?>
                </div>
            <?php else: ?>



                <div class="empty">
                    <div class="line">

                    </div>
                    <div class="empty-tasks">
                        <img src="img/Clipboard.svg" alt="">
                        <h2>There is no actually tasks</h2>
                        <p>Click on button to add</p>
                    </div>
                </div>


            <?php endif; ?>


    </main>

</body>

</html>