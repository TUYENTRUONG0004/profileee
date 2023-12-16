<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
</head>
<body>
    <?php
    $connect = new mysqli('localhost', 'root', '', 'k22cnt3_truongdinhtuyen');
    $sql = "SELECT * FROM them_tdt WHERE 1=1 ";
    $resultset = $connect->query($sql);
    //print_r($resultset);
    //while($row = $resultset->fetch_array()){
        //echo "<P>" .$row[0] ."---" .$["tenkhoa"];
    //}
    ?>
    <h1>Danh sách sp</h1>
    <hr>
    <table witdh="80% align="center" border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Giá tiền</th>
                <th>Địa chỉ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($result_tdt->num_row){
                $stt =0;
                while($row = $resultset->fetch_array()){
                    $stt++;
                    ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $row["TENSANPHAM"]; ?></td>
                <td><?php echo $row["GIATIEN"]; ?></td>
                <td><?php echo $row["DIACHI"]; ?></td>
            </tr>
            <?php
            }
                }else{
                    ?>
                    <tr>
                        <td colspan="10">
                        </td>
                    </tr>
                    <?php

                    ?>
                }
            ?>
        </tbody>
</table>
</body>
</html>