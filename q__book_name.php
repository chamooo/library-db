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
    <h1 class="title">Пошук за назвою книги</h1>  
    <a class="main-menu-btn" href="index.php">МЕНЮ</a>
    <div class="wrapper">

        <h2 class="sub-title">Введіть назву книги</h2>
        <form method="post">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Назва книги" aria-describedby="button-addon2">
                <input class="btn btn-outline-secondary" type="submit" name="submit" value="Пошук" id="button-addon2"></input>
                <?php
                    require_once 'connect.php';

                    if(isset($_POST['submit'])) {
                        $search = $_POST['search'];
                        $query = "SELECT `book`.`Назва книги`, 
                        `author`.`Автор`, 
                        `editions`.`Видавництво`, 
                        `city`.`Місто`,
                        `book`.`Рік`,
                        `book`.`Сторінок`,
                        `genres`.`Жанр`,
						`book`.`Ціна`
                        FROM `book` 
                        JOIN `author` ON `Код автор` = `Код_автор`
                        JOIN `editions` ON `Код видавництво` = `Код_видавництво`
                        JOIN `city` ON `Код місто` = `Код_місто`
                        JOIN `genres` ON `Код жанр` = `Код_жанр`
                        WHERE `book`.`Назва книги` LIKE '%$search%'";
                        $books = mysqli_query($connection, $query);
                        $books = mysqli_fetch_all($books);
                        foreach ($books as $book) {
                ?>
                            <table class='table table-dark table-striped table-hover table-bordered'>
                                <tr>
                                    <th>Назва</th>
                                    <th>Автор</th>
                                    <th>Видавництво</th>
                                    <th>Місто</th>
                                    <th>Рік</th>
                                    <th>Сторінок</th>
                                    <th>Жанр</th>
                                    <th>Ціна</th>
                                </tr>
                                <tr>
                                    <td><?=$book[0]?></td>
                                    <td><?=$book[1]?></td>
                                    <td><?=$book[2]?></td>
                                    <td><?=$book[3]?></td>
                                    <td><?=$book[4]?></td>
                                    <td><?=$book[5]?></td>
                                    <td><?=$book[6]?></td>
                                    <td><?=$book[7]?></td>
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
