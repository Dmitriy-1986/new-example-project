<?php
require_once "connect.php";
require_once "pagination.php";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h1><a href="textarea.php">Написать статью</a></h1>
    
<?php
   /*  $result = $conn->query("SELECT * FROM `text` ORDER BY id DESC");

    foreach($result as $row){
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<p>" . $row["txt"] . "</p><br>";
            echo "<p>" . $row["date"] . "</p><hr><br>";
    } */
         while($row = mysqli_fetch_array($res_data)){
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<p>" . $row["txt"] . "</p><br>";
            echo "<p>" . $row["date"] . "</p><hr><br>";
        } 
?>
    <ul class="pagination">
        <li><a href="?pageno=1">Первая</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Предыдущая</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Следующая</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Последняя</a></li>
    </ul>

    <footer>
        2021 год
    </footer>
    
</body>

</html>