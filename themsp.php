<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới thông tint</title>
</head>
<body>
    <?php
    if(isset($_POST["btnTDTThemmoi"] )){
    $connect_tdt = new mysqli('localhost', 'root', '', 'k22cnt3_truongdinhtuyen');
        $TENSANPHAM =$_POST["TENSP"];
        $GIATIEN =$_POST["GIATIEN"];
        $DIACHI =$_POST["DIACHI"];
        sql_tdt = "SELECT * FROM them_php";
        sql_tdt = "VALUE('$TENSANPHAM','$GIATIEN','$DIACHI')";
        // echo $sql;
        if($connect ->query($sql_tdt));
        {
            header("location:themsp.php");
        }else{
            $error="Loi them moi".$connect_tdt->error;
        }
    }
    ?>
    <form name="frm" method="post" action="">
        <h1>Thêm mới thông tin khoa</h1>
        <table witdh="80% align="center" border="1px">
        <tbody>
            <tr>
                <td>Tên sản phẩm </td>
                <input type="text" name="TENSP"id="TENSP">
                
            </tr>
            <tr>
                <td>Giá tiền</td>
                <input type="number" name="GIATIEN"id="GIATIEN">
                
            </tr>
            <tr>
                <td>Địa chỉ</td>
               <td>
               <input type="text" name="DIACHI"id="DIACHI">
               </td>
            </tr>
            <tr>
                <td> </td>
                <td>
                <input type="submit" value="Thêm mới" name="btnTDTThemmoi"/>
                </td>
            </tr>
        </tbody>
    </table>
    <div>
        <?php echo $error;?>
        <a href="themsp.php">Danh sach khoa</a>
    </div>
    </form>

    
</body>
</html>