<?php 
$conn_tdt=new mysqli("localhost","root","","k22cnt3-truongdinhtuyen");
if(!$conn_tdt){
    echo"<h2> lỗi: "</h2>"";
}else{ echo "<h2> TDT </h2>"}
?>