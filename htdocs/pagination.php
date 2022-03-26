<?php
    require_once "connect.php";

    if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
    } else {
        $pageno = 1;
    }

    $size_page = 5;
    $offset = ($pageno-1) * $size_page;

    $pages_sql = "SELECT COUNT(*) FROM `text`";
    $result = mysqli_query($conn, $pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $size_page);

    $sql = "SELECT * FROM `text` ORDER BY id DESC LIMIT $offset, $size_page";

    $res_data = mysqli_query($conn, $sql);

?>