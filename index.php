<?php
    require_once 'connect.php';
    clearstatcache(true, './css/style.css');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Запити</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
    
</head>
<body>  

    <div class="wrapper">
        <h1 class="title">Запити</h1>
        <div class="buttons-container">
            <div class="btn-item">
                <a class="underline-one query-button" href="q__book_name.php">Пошук за назвою книги</a>
            </div>
            <div class="btn-item">
                <a class="underline-one query-button" href="q__genre.php">Пошук за жанром</a>
            </div>
            <div class="btn-item">
                <a class="underline-one query-button" href="q__min_max_price.php">Мінімальна та максимальна<br> ціна  на книги видавництва Віват</a>
            </div>  
            <div class="btn-item">
                <a class="underline-one query-button" href="q__ordered.php">Упорядкований список книг</a>
            </div>
        </div>
    </div>
</body>
</html>