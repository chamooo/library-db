<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пошук за назвою</title>
    
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <a class="main-menu-btn" href="index.php">МЕНЮ</a>
    <h1 class="title">Мінімальна та максимальна ціна на книги</h1> 
    <h2 class="bottom-title">видавництва "ВІВАТ"</h2> 
    <div class="wrapper">
        <form method="post">
            <div class="input-group mb-3">
                <input class="btn btn-outline-secondary" type="submit" name="submit" value="Вивести" id="button-addon2"></input>
                <?php
                    require_once 'connect.php';

                    if(isset($_POST['submit'])) {
                        $search = $_POST['search'];
                        $query = "SELECT `editions`.`Видавництво`, 
                        MIN(`book`.`Ціна`),
                        MAX(`book`.`Ціна`) 
                        FROM `editions` 
                            LEFT JOIN `book` ON `book`.`Код Видавництво` = `editions`.`Код_видавництво`
                        WHERE `editions`.`Видавництво` = 'Віват'";
                        $books = mysqli_query($connection, $query);
                        $books = mysqli_fetch_all($books);
                        foreach ($books as $book) {
                ?>
                            <table class='table table-dark table-striped table-hover table-bordered'>
                                <tr>
                                    <th>Видавництво</th>
                                    <th>Мін ціна</th>
                                    <th>Макс. ціна</th>
                                </tr>
                                <tr>
                                    <td><?=$book[0]?></td>
                                    <td><?=$book[1]?></td>
                                    <td><?=$book[2]?></td>
                                    
                                </tr>
                            </table>
                            <?php
                        }

                    }
                ?>
            </div>
        </form>
    </div>


</body>
</html>
