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
    <h1 class="title">Впорядкований список книг за зростанням ціни</h1>  
    <div class="wrapper">
        <form method="post">
            <div class="input-group mb-3">
                <?php
                    require_once 'connect.php';
                    $query = "SELECT `book`.`Назва книги`, `book`.`Ціна` 
                    FROM `book` 
                    ORDER BY `book`.`Ціна` ASC";
                    $books = mysqli_query($connection, $query);
                    $books = mysqli_fetch_all($books);
                    $result = $result = $connection->query($query);
                    echo "<table class='table table-dark table-striped table-hover table-bordered'>
                    <tr>
                        <th>Назва книги</th>
                        <th>Ціна</th>
                    </tr>";
                    while($row = mysqli_fetch_array($result)) {
                    echo"
                    <tr>
                        <td>".$row[0]."</td>
                        <td>".$row[1]."</td>
                    </tr>";
                    };
                    echo "</table>";
                ?>
                            
            </div>
        </form>
    </div>


</body>
</html>
