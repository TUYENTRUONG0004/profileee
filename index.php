<?php
session_start();
if(!isset($_SESSION['dangnhap'])){
    header('Location:giaodiendangnhap.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">s
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin đây</title>

</head>
<body>
    <h1 class="title_admin">Xin chào Admin</h1>
    <div class="wraper">
        <?php
        include("ketnoi.php");
        include("giaodien");
        include("");
        include("");
        include("");
        ?>
    </div>
</body>
</html>