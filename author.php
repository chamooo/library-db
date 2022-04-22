<?php
    $authors = mysqli_query($connection, "SELECT * FROM `author`");
    $authors = mysqli_fetch_all($authors);
    foreach ($authors as $author) {
        ?>
        <tr>
            <td><?=$author[0]?></td>
            <td class="author-name"><?=$author[1]?></td>
        </tr>
        <?php
    }
?>