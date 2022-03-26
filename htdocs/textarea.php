<?php
require_once "connect.php"; 

if(isset($_POST['submit'])) {

    $title = $_POST['title'];
    $textarea = $_POST['textarea'];
    date_default_timezone_set("Europe/Kiev");
    $date = date('Y-m-d H:i');

    mysqli_query($conn, "INSERT INTO `text` (`id`, `title`, `txt`, `date`) VALUES (NULL, '$title', '$textarea', '$date')");

    mysqli_close($conn);

    if(!empty($_POST)){
        header("Location: {$_SERVER['PHP_SELF']}");
        exit;
    }

}
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
    <h1><a href="index.php">Все статьи</a></h1>

    <form action="" method="post">
        <p class="text-ident-0">
            <input type="text" name="title" id="title" placeholder="Заголовок" required>
        </p>
        <p class="text-ident-0">
            <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Текст"  required></textarea>
            <input type="submit" name="submit" value="Отправить">
        </p>
    </form>
</body>

</html>